#ifndef CONTROL_CASA_H
#define CONTROL_CASA_H

#define IN 0
#define OUT 1

#define FILENAME "Casa.txt"
#define MAXBUF 1024
#define DELIM "="

int apagar_casa ();
int encender_casa ();
int encender_led (int);
int apagar_led (int);
int estado_puerta (int);
int tomar_foto();
int escribir_log ();
int leer_log ();
int setGPIO (int, int);
int writeGPIO (int, int);
int readGPIO (int);
int closeGPIO (int);

#endif
