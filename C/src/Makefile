SRC = main
DST = ../bin/$(SRC)
INCLUDE = -I../include
LIB = -L../lib

CC = arm-poky-linux-gnueabi-gcc
SYSROOT = --sysroot=/opt/poky/2.3.3/sysroots/cortexa7hf-neon-vfpv4-poky-linux-gnueabi/
SHARED = ../lib/libControlCasa

all: main

main:
		$(CC) ${SYSROOT} -o $(DST) $(SRC).c $(INCLUDE) $(SHARED).a -mfloat-abi=hard
		echo "\n[***Prueba unitaria 2] Ejecutable creado con exito"

clean:
		rm $(DST)*
