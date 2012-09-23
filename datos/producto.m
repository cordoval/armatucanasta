function M = producto(P)
%% Filtrar producto y generar una matriz M cuyas
%  columnas con los años y filas son los meses
%  P es un string

%% Es necesario que el script que lo llame contenga en
%  la primera linea la siguiente instruccion
%  addpath("/usr/share/octave/packages/3.2/io-1.0.14")

%% Revisando espacios y transformandolos en subquiones
%  en P para poder evaluar compativilidad


%% Cargando el valor de los productos en "productos" y
%  carga la tabla a "tabla"
cargar_productos
tabla = csvread("raw.csv");
% quitando promedios de la tabla
[m,n] = size(tabla);
n -= 1;
tabla = tabla(:,1:n);

%% Reemplazar los espacio por subguiones en P
for i = 1:length(P)
    if(P(i) == " " || P(i) == "(" || P(i) == ")" || P(i) == "/")
        P(i) = "_";
    end
end

%% Guarga el codigo de producto P en cod
cod = eval(["productos." P]);

%% Calculo de la matiz de salida M
M = [];
for i = 1:m
    if (tabla(i,2) == cod)
        M = [M; tabla(i,1) tabla(i,3:n)];
    end
end
end
