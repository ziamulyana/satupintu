<?php 

function konfigurasi($title, $jenis, $c_des=null)
{
    $CI = get_instance();
    $CI->load->model('Konfigurasi_model');
    $CI->load->model('Auth_model');
    $CI->load->model('SuratObat_model');
    $CI->load->model('SuratPbf_model');
    $CI->load->model('SuratPangan_model');
    $CI->load->model('SuratKemasan_model');
    $CI->load->model('SuratKosmetik_model');
    $CI->load->model('SuratTl_model');
    $auth = $CI->Auth_model->get_by_id('id');
    $site = $CI->Konfigurasi_model->listing();
    $temuan_obat= $CI->SuratObat_model->getTemuan($jenis);
    $temuan_pbf= $CI->SuratPbf_model->getTemuan();
    $temuan_pangan= $CI->SuratPangan_model->getTemuan();
    $temuan_kosmetik= $CI->SuratKosmetik_model->getTemuan();
    $temuan_kemasan= $CI->SuratKemasan_model->getTemuan();

    $data = array(
        'title' => $title.' | '.$site['nama_website'],
        'logo' => $site['logo'],
        'favicon' => $site['favicon'],
        'email' => $site['email'],
        'no_telp' => $site['no_telp'],
        'alamat' => $site['alamat'],
        'facebook' => $site['facebook'],
        'instagram' => $site['instagram'],
        'keywords' => $site['keywords'],
        'metatext' => $site['metatext'],
        'about' => $site['about'],
        'site' => $site,
        'c_judul' => $title,
        'c_des' => $c_des,
        'userdata' => $auth,
        'temuan_obat' => $temuan_obat,
        'temuan_pbf' => $temuan_pbf,
        'temuan_pangan' => $temuan_pangan,
        'temuan_kemasan' => $temuan_kemasan,
        'temuan_kosmetik' => $temuan_kosmetik
    );

    return $data;
}


