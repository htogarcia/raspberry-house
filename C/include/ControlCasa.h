#ifndef CONTROL_CASA_H
#define CONTROL_CASA_H

#define LED_COCINA 1
#define LED_CUARTO_A 2
#define LED_SALA 3
#define LED_CUARTO_B 4
#define LED_COMEDOR 5
#define PUERTA_PRINC 6
#define PUERTA_TRAS 7
#define PUERTA_CUARTO_A 8
#define PUERTA_CUARTO_B 9

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
int reservar_GPIO (int, int);
int escribir_GPIO (int, int);
int leer_GPIO (int);
int liberar_GPIO (int);


#endif
