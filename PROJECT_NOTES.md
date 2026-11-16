# Project notes

## Development checklist
- [ ] Confirm sensor model and ESP32 board.
- [ ] Calibrate dry and wet soil sensor readings.
- [ ] Implement secure ESP32-to-PHP data submission.
- [ ] Add authentication and protect dashboard routes.
- [ ] Add charts and historical readings.
- [ ] Test irrigation relay behavior safely.
- [ ] Test on the target deployment environment.

## Hardware safety
Use an appropriately rated relay/driver and power supply. Do not connect pumps or mains voltage directly to ESP32 pins.
