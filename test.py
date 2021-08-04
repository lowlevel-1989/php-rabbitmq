import os
from random import randrange

for i in range(14):
    os.system('php new_task.php vinicio {request:02d} {delay}'.format(
        **{
            'request': i + 1,
            'delay': '.' * randrange(15),
        }
    ))
