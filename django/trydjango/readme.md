## Setup Virtual Environment 

### Installing virtualenv

On Linux and macOS:
```sh
python3 -m pip install --user virtualenv
```

On Windows:
```sh
py -m pip install --user virtualenv
```

### Creating a virtual environment

On Linux and macOS:
```sh
$ mdkdir folder_project
$ cd folder_project
$ python3 -m venv env
```
Or (recommend):
```sh
$ virtualenv -p python3
```

On Windows:
```sh
$ mdkdir folder_project
$ cd folder_project
$ py -m venv env
```

### Activating a virtual environment

On Linux and macOS:
```sh
$ source env/bin/activate
```

On Windows:
```sh
$ .\env\Scripts\activate
```
You can confirm you’re in the virtual environment by checking the location of your Python interpreter, it should point to the env directory.

On Linux and macOS:
```sh
$ which python
.../env/bin/python
```

On Windows:
```sh
$ where python
.../env/bin/python.exe
```

### Leaving the virtual environment

```sh
$ deactivate
```
View more detail here: https://packaging.python.org/guides/installing-using-pip-and-virtual-environments/
