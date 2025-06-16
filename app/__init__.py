from flask import Flask

app = Flask(__name__)

from app import routes  # этот импорт должен быть здесь, чтобы зарегистрировать маршруты
