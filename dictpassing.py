#passing dict to function:

def Myfunc(arg):
    for key in arg:
        print("key:",key,"value:",arg[key])
dict={'a':1,'b':2,'c':3}
Myfunc(dict)
        