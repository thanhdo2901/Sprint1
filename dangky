from flask import Flask, request, jsonify

app = Flask(_name_)

@app.route('/register', methods=['POST'])
def register():
    # Nhận dữ liệu từ form
    fullname = request.form['fullname']
    email = request.form['email']
    password = request.form['password']
    confirm_password = request.form['confirm_password']

    # Kiểm tra dữ liệu đầu vào (Bạn cần thêm logic phức tạp hơn tùy vào yêu cầu)
    if password != confirm_password:
        return jsonify({'message': 'Mật khẩu xác nhận không khớp'})

    # Lưu thông tin người dùng (Thêm logic lưu trữ vào cơ sở dữ liệu tại đây)
    # Ví dụ: save_user(fullname, email, password)

    return jsonify({'message': 'Đăng ký thành công'})

if _name_ == '_main_':
    app.run(debug=True)
