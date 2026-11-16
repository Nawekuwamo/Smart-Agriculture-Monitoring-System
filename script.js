// Dashboard starter: fetches the latest sensor reading from the PHP API.
async function loadSensorData() {
  try {
    const response = await fetch("backend/api/latest.php");
    if (!response.ok) throw new Error(`HTTP ${response.status}`);
    const data = await response.json();

    document.getElementById("moisture").textContent =
      data.moisture_percent == null ? "-- %" : `${data.moisture_percent} %`;
    document.getElementById("soilStatus").textContent = data.soil_status ?? "No status";
    document.getElementById("pumpStatus").textContent = data.pump_status ?? "Unknown";
  } catch (error) {
    console.error("Could not load sensor data:", error);
  }
}
loadSensorData();
setInterval(loadSensorData, 10000);
