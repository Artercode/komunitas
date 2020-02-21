<!-- untuk mengenali helper ini harus dibuat dalam app../config/autoload.php -->
<!-- cari bagian autoload helper baris 92-->

<?php
// buat fuction baru
function is_logged_in()
{
    //  di bagian helper ini tidak mengenal perintah dari codeigniter ($this)
    // memanggil laybery CI didalam sini - kita buat $ci sebagai instance baru
    $ci = get_instance();
    // jika session belum ada isi emailnya maka ..
    if (!$ci->session->userdata('email')) {
        redirect('login/index');
    } else {
        // jika sudah login di session sudah ada data jadi kita tau role_id nya
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);
        if ($userAccess->num_rows() < 1) {
            // karena sudah login maka diarahkan ke ...
            redirect('login/blocked');
        }
    }
}

function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}



?>