/*
  ESP32 firmware starter template.
  Connect and calibrate your soil-moisture sensor and relay safely.
  Configure Wi-Fi and API endpoint locally; never commit real credentials.
*/
#include <WiFi.h>
#include <HTTPClient.h>

const int SOIL_PIN = 34; // Example ADC pin; check your ESP32 board.
const int RELAY_PIN = 26; // Example only; verify relay module and wiring.

void setup() {
  Serial.begin(115200);
  pinMode(RELAY_PIN, OUTPUT);
  // TODO: configure Wi-Fi using a private local secrets file/header.
  // TODO: set the safe relay state for your hardware.
}

void loop() {
  int rawMoisture = analogRead(SOIL_PIN);
  Serial.print("Raw soil sensor value: ");
  Serial.println(rawMoisture);
  // TODO: calibrate raw ADC values into a moisture percentage.
  // TODO: send readings to a secured PHP endpoint over Wi-Fi.
  delay(5000);
}
