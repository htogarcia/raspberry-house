# source /opt/poky/2.3.3/environment-setup-cortexa7hf-neon-vfpv4-poky-linux-gnueabi

OPR = ControlCasa
SRC = $(OPR).c
LOPR = lib$(OPR)
CC = arm-poky-linux-gnueabi-gcc
LD = arm-poky-linux-gnueabi-ld

INCLUDE = -I../include
SYSROOT = --sysroot=/opt/poky/2.3.3/sysroots/cortexa7hf-neon-vfpv4-poky-linux-gnueabi/

all: dynamic

static:
		$(CC) ${SYSROOT} -c $(SRC) ${INCLUDE} -mfloat-abi=hard
		ar rv $(LOPR).a $(OPR).o
		ranlib $(LOPR).a
		rm $(OPR).o
		echo "\n[***Prueba unitaria 1] Biblioteca creada con exito\n"

dynamic:
		$(CC) ${SYSROOT} -c $(SRC) ${INCLUDE} -mfloat-abi=hard -fPIC
		$(LD) ${SYSROOT} -o $(LOPR).so $(OPR).o -shared
		rm $(OPR).o
		echo "\n[***Prueba unitaria 1] Biblioteca creada con exito\n"


clean:
		rm $(LOPR).so
		# rm $(LOPR).a
