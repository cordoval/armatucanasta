function M = rellenar(M)
    [pol, anio, mes, precio] = genpol(M);
    [m,n] = size(M);
    %% ubicamos a anio en M en la posicion j
    j = 0;
    for i = 1:m
        if (M(i,1) != anio)
            j += 1;
            continue;
        end
        break;
    end
    %% verificamos que la matriz este completa dentro de
    %  sus limites
    for i = mes(1):mes(length(mes))
        if(M(j,i+1) == 0)
            M(j,i+1) = polyval(pol,i);
        end
    end
    %% Completando los datos hacia abajo del año con mejor curva
    %  Tener en cuenta que solo llenaren el rago de meses que le
    %  permita el rango [mes(1):mes(length(mes))]
    for f = j+1:m
        k = mes(1);
        %encontrar siguiente 1
        for c = mes(1):mes(length(mes))
            if(M(f,c+1))
                for m = k+1:c
                    M(f,m) = M(j,m)*M(j,c+1)/M(f,c+1);
                end
                k = c;
            end
        end
        for m = k+1:13
            M(f,m) = M(j,m)*M(j,k)/M(f,k);
        end
    end
end
