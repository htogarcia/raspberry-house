SRC = main
DST = ../bin/$(SRC)
CC = arm-poky-linux-gnueabi-gcc

SYSROOT = --sysroot=/opt/poky/2.3.3/sysroots/cortexa7hf-neon-vfpv4-poky-linux-gnueabi/

INCLUDE = -I../include
LIB = -L../lib

SHARED = ../lib/librasduino

all: main

main:
		$(CC) ${SYSROOT} -o $(DST) $(SRC).c $(INCLUDE) $(SHARED).a -mfloat-abi=hard

clean:
		rm $(DST)*
