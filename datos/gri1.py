print "productos = struct(",
f = open("pro_raw.csv", 'r')
codes = []
reslines = []
for e in f.readlines()[:-1]:
  e = e[:-1]
  if e[:4] not in codes:
    codes.append(e[:4])
    a = e[5:]
    b = ""
    for i in a:
      if i in " -./()":
        b=b+'_'
      else:
        b=b+i
    reslines.append('"'+b+'",'+',')

reslines[-1] = (reslines[-1])[:-1]+");"

for e in reslines:
 print e

