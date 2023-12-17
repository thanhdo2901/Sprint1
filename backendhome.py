from flask import Flask, request, jsonify

app = Flask(_name_)

# Trả về trang chủ
@app.route('/')
def home():
    return 'Trang Chủ'

# Xử lý tìm kiếm sản phẩm
@app.route('/search', methods=['GET'])
def search():
    query = request.args.get('query')
    # Tại đây, thêm logic để tìm kiếm sản phẩm dựa trên 'query'
    # Ví dụ: results = search_products(query)
    results = f"Tìm kiếm cho '{query}'"
    return jsonify(results)

# Xử lý thông tin liên hệ
@app.route('/contact', methods=['POST'])
def contact():
    contact_info = request.form
    # Xử lý thông tin liên hệ tại đây
    # Ví dụ: save_contact_info(contact_info)
    return jsonify({"message": "Thông tin liên hệ đã được gửi"})

if _name_ == '_main_':
    app.run(debug=True)
