#include <ControlCasa.h>

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

/*
order:
    LED_COCINA, LED_CUARTO_A, LED_SALA 2, LED_CUARTO_B, LED_COMEDOR,
    PUERTA_PRINC, PUERTA_TRAS, PUERTA_CUARTO_A, PUERTA_CUARTO_B
*/
int GPIOs[9] = {1,2,3,4,5,6,7,8};

int Casa[9];

/**
 * Apaga todos los leds de la casa
 * @return 0 si todo se hizo bien, -1 si hubo algun error
 */
int apagar_casa (){

}

/**
 * Enciende todos los leds de la casa
 * @return 0 si todo se hizo bien, -1 si hubo algun error
 */
int encender_casa (){

}

/**
 * Enciende un led especifico
 * @param id del led que se va a encender
 * @return 0 si todo se hizo bien, -1 si hubo algun error
 */
int encender_led (int id_led) {
  // writeGPIO (id_led, 1)
  // infoCasa.id_led = 1
  // escribir_log ()
}

/**
 * Apaga un led especifico
 * @param id del led que se va a apagar
 * @return 0 si todo se hizo bien, -1 si hubo algun error
 */
int apagar_led (int id_led){
  // writeGPIO (id_led, 0)
  // infoCasa.id_led = 0
  // escribir_log ()
}

/**
 * Actualiza el estado de una puerta especifica en el log
 * @param id de la puerta que se quiere consultar
 * @return 0 si todo se hizo bien, -1 si hubo algun error
 */
int estado_puerta (int id_puerta){
  // val = readGPIO (id_led)
  // infoCasa.id_puerta = val
  // escribir_log ()
}

/**
 * Captura una imagen y la guarda con el nombre capture.png
 * @return 0 si todo se hizo bien, -1 si hubo algun error
 */
int tomar_foto(){

}

/**
 * Escribe el contenido de la estructura infoCasa en el archivo Casa.txt
 * @return 0 si todo se hizo bien, -1 si hubo algun error
 */
int escribir_log (){
  FILE *f = fopen("config.conf", "w");
  if (f == NULL)
  {
    printf("Error opening file!\n");
    exit(1);
  }

  fprintf(f, "LED_COCINA = %d\n", Casa[0]);
  fprintf(f, "LED_CUARTO_A = %d\n", Casa[1]);
  fprintf(f, "LED_SALA = %d\n", Casa[2]);
  fprintf(f, "LED_CUARTO_B = %d\n", Casa[3]);
  fprintf(f, "LED_COMEDOR = %d\n", Casa[4]);
  fprintf(f, "PUERTA_PRINCIPAL = %d\n", Casa[5]);
  fprintf(f, "PUERTA_PATIO = %d\n", Casa[6]);
  fprintf(f, "PUERTA_CUARTO_A = %d\n", Casa[7]);
  fprintf(f, "PUERTA_CUARTO_B = %d\n", Casa[8]);

  fclose(f);
}

/**
 * Lee el contenido del archivo Casa.txt y lo carga en la estructura infoCasa
 * @return 0 si todo se hizo bien, -1 si hubo algun error
 */
int leer_log (){
  FILE *file = fopen (FILENAME, "r");

  if (file != NULL)
  {
    char line[MAXBUF];
    int i = 0;

    while(fgets(line, sizeof(line), file) != NULL)
    {
      char *cfline;
      cfline = strstr((char *)line,DELIM);
      cfline = cfline + strlen(DELIM);
      Casa[i] = atoi(cfline);
      i++;
    } // End while

    fclose(file);

  } // End if file

}

/**
 * Establece un pin como entrada o como salida
 * @param pin puerto del pin que se quiere reservar y configurar
 * @param mode 0 si se quiere usar como entrada 1 como salida
 * @return 0 si todo se hizo bien, -1 si hubo algun error
 */
int setGPIO (int pin, int mode) {

}

/**
 * Escribe un valor digital en un pin especifico
 * @param pin GPIO donde se va a escribir el valor
 * @param value valor que se va a escribir en el pin: 1 para HIGH, 0 para LOW
 * @return 0 si todo se hizo bien, -1 si hubo algun error
 */
int writeGPIO (int pin, int value) {

}

/**
 * Lee un valor digital de un pin especifico
 * @param pin GPIO que se va a leer
 * @return 0 si lee LOW, 1 si lee HIGH, -1 si hubo algun error
 */
int readGPIO (int pin) {

}

/**
 * Libera el GPIO (no apropiatividad)
 * @param pin GPIO que se va a liberar
 * @return 0 si todo se hizo bien, -1 si hubo algun error
 */
int closeGPIO (int pin) {

}