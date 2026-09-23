# Checklist Xây Dựng Phân Trang

- [ ] Xây dựng dữ liệu
- [ ] Xây dựng giao diện
- [ ] Ý tưởng xây dựng phân trang
- [ ] Tính số lượng trang
- [ ] Xác định số lượng bản ghi mỗi trang
- [ ] Hiển thị danh sách theo trang
- [ ] Hiển thị thanh phân trang
- [ ] Nổi bật chỉ số hiện hành

---

## 1. Ý Tưởng Xây Dựng Thanh Phân Trang

- Chia dữ liệu thành nhiều phần để hiển thị.
- Mỗi trang có số lượng bản ghi được quy định sẵn.
- Có thể chọn xem trang thông qua thanh phân trang.

---

## 2. Các Tham Số Cần Thiết

- `num_per_page`: Số lượng bản ghi trên mỗi trang.
- `total_row`: Tổng số dòng dữ liệu.
- `num_page`: Tổng số trang.
- `start`: Chỉ số bản ghi bắt đầu của mỗi trang.
- `page`: Chỉ số trang hiện tại.

---

## 3. Tính Số Lượng Trang

Công thức tính tổng số trang:

$$\text{num\_page} = \text{ceil}\left(\frac{\text{total\_row}}{\text{num\_per\_page}}\right)$$

Trong đó:
- $\text{total\_row}$: Tổng số bản ghi.
- $\text{num\_per\_page}$: Số bản ghi trên mỗi trang.

---

## 4. Xác Định Miền Bản Ghi Mỗi Trang

Miền chỉ số bản ghi là danh sách chỉ số dữ liệu lấy ra từ truy vấn `SELECT` dữ liệu (ví dụ: $(0, 1, 2)$, $(3, 4, 5)$, $(6, 7, 8)$).

Ví dụ với $\text{num\_per\_page} = 3$:

$$\text{start} = (\text{page} - 1) \times \text{num\_per\_page}$$