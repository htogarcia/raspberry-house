#include <ControlCasa.h>
#include <string.h>
#include <stdio.h>
#include <stdlib.h>

int main (int argc, const char* argv[]) {
  int arg = 1;

  if (argc == 2) {
    if (!strcmp(argv[arg], "LED_COCINA")) {
      printf("%d\n", estado_led(LED_COCINA));
    }
    else if(!strcmp(argv[arg], "LED_CUARTO_A")) {
      printf("%d\n", estado_led(LED_CUARTO_A));
    }
    else if (!strcmp(argv[arg], "LED_SALA")) {
      printf("%d\n", estado_led(LED_SALA));
    }
    else if (!strcmp(argv[arg], "LED_CUARTO_B")) {
      printf("%d\n", estado_led(LED_CUARTO_B));
    }
    else if (!strcmp(argv[arg], "LED_BANO")) {
      printf("%d\n", estado_led(LED_BANO));
    }
    else if (!strcmp(argv[arg], "PUERTA_PRINC")) {
      printf("%d\n", estado_puerta(PUERTA_PRINC));
    }
    else if (!strcmp(argv[arg], "PUERTA_TRAS")) {
      printf("%d\n", estado_puerta(PUERTA_TRAS));
    }
    else if (!strcmp(argv[arg], "PUERTA_CUARTO_A")) {
      printf("%d\n", estado_puerta(PUERTA_CUARTO_A));
    }
    else if (!strcmp(argv[arg], "PUERTA_CUARTO_B")) {
      printf("%d\n", estado_puerta(PUERTA_CUARTO_B));
    }
    else if (!strcmp(argv[arg], "APAGAR_CASA")) {
      apagar_casa();
    }
    else if (!strcmp(argv[arg], "ENCENDER_CASA")) {
      encender_casa();
    }
    else {
      printf("[Error] No existe ningun objeto %s\n", argv[arg]);
    }
  }
  if (argc == 3) {
    if (!strcmp(argv[arg], "LED_COCINA")) {
      if (atoi (argv[arg+1]) == 1) {
        encender_led(LED_COCINA);
      }
      else {
        apagar_led(LED_COCINA);
      }
    }
    else if(!strcmp(argv[arg], "LED_CUARTO_A")) {
      if (atoi (argv[arg+1]) == 1) {
        encender_led(LED_CUARTO_A);
      }
      else {
        apagar_led(LED_CUARTO_A);
      }
    }
    else if (!strcmp(argv[arg], "LED_SALA")) {
      if (atoi (argv[arg+1]) == 1) {
        encender_led(LED_SALA);
      }
      else {
        apagar_led(LED_SALA);
      }
    }
    else if (!strcmp(argv[arg], "LED_CUARTO_B")) {
      if (atoi (argv[arg+1]) == 1) {
        encender_led(LED_CUARTO_B);
      }
      else {
        apagar_led(LED_CUARTO_B);
      }
    }
    else if (!strcmp(argv[arg], "LED_BANO")) {
      if (atoi (argv[arg+1]) == 1) {
        encender_led(LED_BANO);
      }
      else {
        apagar_led(LED_BANO);
      }
    }
    else {
      printf("[Error] No existe ningun objeto %s\n", argv[arg]);
    }
  }

}
