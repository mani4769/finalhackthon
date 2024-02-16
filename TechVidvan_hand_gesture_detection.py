# TechVidvan_hand_gesture_detection.py

import cv2
import numpy as np
import mediapipe as mp
from tensorflow.keras.models import load_model
import base64
from io import BytesIO
from PIL import Image

# Initialize mediapipe
mpHands = mp.solutions.hands
hands = mpHands.Hands(max_num_hands=1, min_detection_confidence=0.7)
mpDraw = mp.solutions.drawing_utils

# Load the gesture recognizer model
model = load_model('mp_hand_gesture')

# Load class names
with open('gesture.names', 'r') as f:
    classNames = f.read().split('\n')

def recognize_gesture(base64_str):
    try:
        # Remove metadata prefix from base64 string if present
        base64_str = base64_str.split(",")[-1]

        # Decode base64 string into image
        image_data = base64.b64decode(base64_str)
        image = Image.open(BytesIO(image_data))

        # Convert image to numpy array
        frame = cv2.cvtColor(np.array(image), cv2.COLOR_RGB2BGR)

        x, y, c = frame.shape
        frame = cv2.flip(frame, 1)
        framergb = cv2.cvtColor(frame, cv2.COLOR_BGR2RGB)
        result = hands.process(framergb)

        className = ''

        if result.multi_hand_landmarks:
            landmarks = []
            for handslms in result.multi_hand_landmarks:
                for lm in handslms.landmark:
                    lmx = int(lm.x * x)
                    lmy = int(lm.y * y)
                    landmarks.append([lmx, lmy])

                mpDraw.draw_landmarks(frame, handslms, mpHands.HAND_CONNECTIONS)
                prediction = model.predict([landmarks])
                classID = np.argmax(prediction)
                className = classNames[classID]

        return className
    except Exception as e:
        print("Error:", e)
        return "Error occurred during prediction"
