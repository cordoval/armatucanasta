function [pol, anio, mes, precio] = genpol(M)
    [m,n] = size(M);
    r = 0; %fila
    l = 0;
    for i = 1:m
        k = 0; % numero de no ceros en el anio
        for j = 1:n
            if(M(i,j))
                k += 1;
            end
        end
        if(k >= l)
            l = k;
            r = i;
        end
    end
    l -= 1;
    anio = M(r,1);
    precio_ = M(r,2:n);
    precio = zeros(1,l);
    mes = zeros(1,l);
    j = 0;
    for i = 1:n-1
        if(precio_(i))
            j += 1;
            precio(j) = precio_(i);
            mes(j) = i;
        end
    end
    pol = polyfit(mes,precio,l);
end
