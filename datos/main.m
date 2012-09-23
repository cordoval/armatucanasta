close all; clear all;
cargar_productos
M = producto("ACELGA");
M = rellenar(M)';
X = M(1,:);
Y = 1:12;
Z = M(2:13,:);
[XX,YY] = meshgrid(X,Y);
mesh(XX,YY,Z)
grid on;
