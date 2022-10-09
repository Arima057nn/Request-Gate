<?php

return [
    'storeError' => 'Tạo mới request thất bại',
    'storeSuccess' => 'Tạo mới request thành công',
    'requestTitleCreate' => '[REQUEST GATE] Tạo mới request lúc ',
    'requestTitleUpdate' => '[REQUEST GATE] Request thay đổi lúc ',
    'updateError' => 'Chỉnh sửa request thất bại',
    'updateEmpty' => 'Không có chỉnh sửa nào để cập nhật',
    'updateSuccess' => 'Chỉnh sửa request thành công',
    'deleteSuccess' => 'Xóa request thành công',
    'deletePermission' => 'Bạn không có quyền xóa request này',
    'updatePermission' => 'Bạn không có quyền sửa request này',
    'requestTitleComment' => '[REQUEST GATE] Comment request ',
    'commentError' => 'Tạo mới comment thất bại',
    'commentSuccess' => 'Tạo mới comment thành công',
    'commentFail' => 'Bạn không có quyền comment',
    'requestEmpty' => 'Request không tồn tại',
    'requestDelete' => 'Request đã bị xóa',
    'login' => 'Đăng nhập thất bại',
    'loginWithGoogleSuccess' => 'Đăng nhập với google thành công',
    'loginWithGoogleFailt' => 'Đăng nhập với google thất bại',
    'requestSuccessSendMailFailt' => 'Tạo request thành công',
    'eidtSuccessSendMailFailt' => 'Sửa request thành công',
    'commentSuccessSendMailFailt' => 'Tạo comment thành công',
    'dueDateSendMailFailt' => 'Lỗi gửi email',
    'dueDateSendMailSuccess' => 'Gửi mail thông báo xử lý request đến hạn thành công',
    
    'user' => [
        'userEmpty' => 'User không tồn tại',
        'destroySuccess' => 'Xóa user thành công',
        'addUserSuccess' => 'Thêm nhân viên thành công',
        'canNotCreateManageDeparment' => 'Không được tạo quản lý bộ phận',
        'canNotChangeRoleManageDeparment' => 'Không thể thay đổi role của quản lý bộ phận',
        'canNotChangeRoleAdmin' => 'Không thể thay đổi role của Admin',
        'categoryAllwaysHasAssignee' => 'Category luôn phải có người phụ trách',
        'roleAdminMustBeManageDeparment' => 'Role Admin phải thuộc bộ phận QLNS!',
        'currentPasswordNotMatch' => 'Nhập sai Password',
        'changePassSuccess' => 'Thay đổi mật khẩu thành công',
        'notLoggedIn' => 'Tài khoản hoặc mật khẩu sai,đăng nhập không thành công',
        'loginSuccess' => 'Đăng nhập thành công',
        'logoutSuccess' => 'Đăng xuất thành công',
        'unauthorizedAction' => 'Bạn không có quyền vào chức năng này',
        'unauthenAction' => 'Bạn chưa đăng nhập hoặc token sai',
        'updateSuccess' => 'Cập nhật thông tin thành công',
        'inActive' => 'Bạn đã rời công ty nên không có quyền đăng nhập',
    ],
    'category' => [
        'categoryEmpty' => 'Category không tồn tại',
        'destroySuccess' => 'Xóa category thành công',
        'updateSuccess' => 'Update category thành công',
        'storeSuccess' => 'Tạo mới category thành công',
        'storeError' => 'Tạo mới category thất bại',
        'listError' => 'Lỗi hiển thị danh sách category',
    ],
    'forgotPassword' => [
        'resetPassword' => 'Mail reset password từ REQUEST GATE',
        'mailResetPassError' => 'Mail ResetPass gửi thất bại',
        'mailResetPassSuccess' => 'Mail ResetPass gửi thành công',
        'system' => 'Hệ thống REQUEST GATE',
        'tokenNotExist' => 'Token không tồn tại',
        'tokenInvalid' => 'Token không còn hiệu lực',
        'resetPassSuccess' => 'Thay đổi password thành công',
    ],
    'deparment' => [
        'listError' => 'Lỗi hiển thị danh sách deparment',
        'storeError' => 'Tạo mới deparment thất bại',
        'storeSuccess' => 'Tạo mới deparment thành công',
        'deparmentEmpty' => 'Deparment không tồn tại',
        'updateSuccess' => 'Sửa deparment thành công'
    ]
];
