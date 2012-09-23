#include <stdio.h>

int main() {
	char a;
	int i=0;
	int comma = 0;
	int p = 0;
	while((a=getchar())!=EOF){
		i++;
		if(a==',') comma++;
		if(i>=6&&comma<=2) putchar(a);
		if(a=='\n') {
			putchar('\n');
			i=0;comma=0;
		}
	}
	return;
}
