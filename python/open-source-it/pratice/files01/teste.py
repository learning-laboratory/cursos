# File Objects

# file mode
# a - append
# r - read
# w - write file


# f = open('file.txt', 'r')
# print(f.mode) # show mode
# print(f.name) #show name file
# f.close()

# this instrutt in bellow close file actumaticle
with open('file.txt', 'r') as f:
   # f_contents = f.read() # read all contentes of file
   #  f_contents = f.readlines() # read all lines of file
   #  print(f_contents)
   #  for line in f:
   #      print(line, end=

   size_to_read = 10
   f_contents = f.read(size_to_read)
   #print(f_contents, end="")
   # while len(f_contents) > 0:
   #     print(f_contents, end='*')
   #     f_contents = f.read(size_to_read)
   # print(f.tell()) #vai mostrar 10, porque estamos a ler de 10 em 10 caracteres
   # f.seek(0) #mover o curso para primeira posicao
   # print(f_contents)

# with open('file2.txt', 'w') as f:
#     f.write('Hello World')
#     f.seek(f.tell())
#     f.write(' Hello World TWO')

# with open('file2.txt', 'r') as rf:
#     with open('test_copy.txt', 'w') as wf:
#         for line in rf:
#             wf.write(line)

#rb - read binary file
#wb - write binary file

# with open('img.jpg', 'rb') as rf:
#     with open('img_copy.jpg', 'wb') as wf:
#         for line in rf:
#             wf.write(line)

with open('img.jpg', 'rb') as rf:
    with open('img_copy.jpg', 'wb') as wf:
            chunk_size = 4096
            wf.write(line)