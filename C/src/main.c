#include <ControlCasa.h>
#include <string.h>
#include <stdio.h>
#include <stdlib.h>

int main (int argc, const char* argv[]) {
  int arg = 1;
  while (arg < argc) {
    if (strcmp(argv[arg], "LED_COCINA")) {
      if (atoi (argv[arg+1]) == 1) {
        encender_led(LED_COCINA);
      }
      else {
        apagar_led(LED_COCINA);
      }
      arg += 2;
    }
    else if(strcmp(argv[arg], "LED_CUARTO_A")) {
      if (atoi (argv[arg+1]) == 1) {
        encender_led(LED_CUARTO_A);
      }
      else {
        apagar_led(LED_CUARTO_A);
      }
      arg += 2;
    }
    else if (strcmp(argv[arg], "LED_SALA")) {
      if (atoi (argv[arg+1]) == 1) {
        encender_led(LED_SALA);
      }
      else {
        apagar_led(LED_SALA);
      }
      arg += 2;
    }
    else if (strcmp(argv[arg], "LED_CUARTO_B")) {
      if (atoi (argv[arg+1]) == 1) {
        encender_led(LED_CUARTO_B);
      }
      else {
        apagar_led(LED_CUARTO_B);
      }
      arg += 2;
    }
    else if (strcmp(argv[arg], "LED_COMEDOR")) {
      if (atoi (argv[arg+1]) == 1) {
        encender_led(LED_COMEDOR);
      }
      else {
        apagar_led(LED_COMEDOR);
      }
      arg += 2;
    }
    else if (strcmp(argv[arg], "PUERTA_PRINC")) {
      estado_puerta(PUERTA_PRINC);
      arg += 1;
    }
    else if (strcmp(argv[arg], "PUERTA_TRAS")) {
      estado_puerta(PUERTA_TRAS);
      arg += 1;
    }
    else if (strcmp(argv[arg], "PUERTA_CUARTO_A")) {
      estado_puerta(PUERTA_CUARTO_A);
      arg += 1;
    }
    else if (strcmp(argv[arg], "PUERTA_CUARTO_B")) {
      estado_puerta(PUERTA_CUARTO_B);
      arg += 1;
    }
    else if (strcmp(argv[arg], "APAGAR_CASA")) {
      apagar_casa();
      arg += 1;
    }
    else if (strcmp(argv[arg], "ENCENDER_CASA")) {
      encender_casa();
      arg += 1;
    }
    else {
      printf("[Error] No existe ningun objeto %s\n", argv[arg]);
    }
  }
}
