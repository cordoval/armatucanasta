addpath("/usr/share/octave/packages/3.2/io-1.0.14")

tabla_completa = csvread("Precios_de_los_productos_ingresados.csv");
[m,n] = size(tabla_completa);
raw = [tabla_completa(2:m,1:2) tabla_completa(2:m,4:n)];
csvwrite("raw.csv", raw);
