# app.py

from flask import Flask, render_template, request, jsonify
from TechVidvan_hand_gesture_detection import recognize_gesture

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.php')

@app.route('/predict', methods=['POST'])
def predict():
    base64_str = request.json['image']
    className = recognize_gesture(base64_str)
    return jsonify({'prediction': className})

if __name__ == '__main__':
    app.run(debug=True)
