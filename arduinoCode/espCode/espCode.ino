const char* ssid = "dierentuinWifiNaam";
boolean debug = true;

#include "ESP8266WiFi.h"

void setup() {
  // put your setup code here, to run once:
  if (debug) {
    Serial.begin(115200);
  }

  WiFi.mode(WIFI_STA);

  delay(100);

}

void loop() {
  // put your main code here, to run repeatedly:
  WiFi.disconnect();
  WiFi.scanNetworksAsync(checkNetwork);

  //deep sleep
  delay(20000);
}


void checkNetwork(int networksFound) {
  // scan for nearby networks:
  for (int i = 0; i < networksFound; i++)
  {
    Serial.printf("%d: %s %s \n", i + 1, WiFi.SSID(i).c_str(), WiFi.SSID(i).equals("Defqon 1 (d-word for pass)") ? "the one" : "not the one");
  }

}
