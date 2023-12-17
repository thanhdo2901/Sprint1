rom flask import Flask, request, redirect, url_for

app = Flask(_name_)

@app.route('/login', methods=['GET', 'POST'])
def login():
    if request.method == 'POST':
        # Lấy thông tin người dùng từ form
        username = request.form['username']
        password = request.form['password']

        # Kiểm tra thông tin người dùng
        if username == "admin" and password == "password":  # Thay thế bằng logic xác thực của bạn
            return redirect(url_for('home'))
        else:
            return "Đăng nhập thất bại, vui lòng thử lại"

    return "Đây là trang đăng nhập"

@app.route('/')
def home():
    return 'Đây là trang chủ'

if _name_ == '_main_':
    app.run(debug=True)
