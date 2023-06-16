<?php
    #[\AllowDynamicProperties]  
    class product_m extends CI_model{
      
      public function __construct(){
        $this->table = 'produk';
      }

        public function selectSemua($tbl){
          return $this->db->get($tbl);//nama tabel
        }

        public function selectPembayaran(){
          $this->db->select("a.tanggal_pembayaran as tgl,b.total,c.nama,status_transaksi as status");
          $this->db->from("pembayaran as a");
          $this->db->join("transaksi as b", "a.id_transaksi=b.id_transaksi");
          $this->db->where("status_transaksi != ","Belum Bayar");
          $this->db->join("pengguna as c", "c.id_pengguna=b.id_pengguna");
          return $this->db->get();
        }

        function input_data($data, $tbl){
          $this->db->insert($tbl,$data);
        }

        function selectX($tbl,$where){
          return $this->db->get_where($tbl,$where);
        }

        function update_data($tbl,$data,$where){
          $this->db->where($where);
          $this->db->update($tbl,$data);
        }

        function delete_data($tbl,$where){
          $this->db->delete($tbl,$where);
        }

        function tableHandphone(){
            $q="SELECT p.*, k.kategori as KategoriName FROM produk as p inner join kategori as k on p.id_kategori=k.id_kategori WHERE p.id_kategori = 1 and status='old' and harga_baru=0";
            return $this->db->query($q);
        }


        function tableHandphoneMenu(){
            $q="SELECT id_produk, nama, foto, harga FROM produk WHERE id_kategori = 1 and status='old' and harga_baru=0";
            return $this->db->query($q);
        }

        function tableHandphoneMenu5(){
            $q="SELECT id_produk, nama, foto, harga FROM produk WHERE id_kategori = 1 and status='old' and harga_baru=0 LIMIT 5";
            return $this->db->query($q);
        }

        function tableLaptop(){
          $q="SELECT p.*, k.kategori as KategoriName FROM produk as p inner join kategori as k on p.id_kategori=k.id_kategori WHERE p.id_kategori = 2 and status='old' and harga_baru=0";
            return $this->db->query($q);
        }

        function tableLaptopMenu(){
            $q="SELECT id_produk, nama, foto, harga FROM produk WHERE id_kategori = 2 and status='old' and harga_baru=0";
            return $this->db->query($q);
        }

        function tableLaptopMenu5(){
            $q="SELECT id_produk, nama, foto, harga FROM produk WHERE id_kategori = 2 and status='old' and harga_baru=0 LIMIT 5";
            return $this->db->query($q);
        }

        function tableTablet(){
          $q="SELECT p.*, k.kategori as KategoriName FROM produk as p inner join kategori as k on p.id_kategori=k.id_kategori WHERE p.id_kategori = 3 and status='old'and harga_baru=0";
            return $this->db->query($q);
        }

        function tableTabletMenu(){
            $q="SELECT id_produk, nama, foto, harga FROM produk WHERE id_kategori = 3 and status='old' and harga_baru=0";
            return $this->db->query($q);
        }

        function tableTabletMenu5(){
            $q="SELECT id_produk, nama, foto, harga FROM produk WHERE id_kategori = 3 and status='old' and harga_baru=0 LIMIT 5";
            return $this->db->query($q);
        }

        function tableCamera(){
            $q="SELECT p.*, k.kategori as KategoriName FROM produk as p inner join kategori as k on p.id_kategori=k.id_kategori WHERE p.id_kategori = 4 and status='old' and harga_baru=0";
            return $this->db->query($q);
        }

        function tableCameraMenu(){
            $q="SELECT id_produk, nama, foto, harga FROM produk WHERE id_kategori = 4 and status='old' and harga_baru=0";
            return $this->db->query($q);
        }

        function tableCameraMenu5(){
            $q="SELECT id_produk, nama, foto, harga FROM produk WHERE id_kategori = 4 and status='old' and harga_baru=0 LIMIT 5";
            return $this->db->query($q);
        }

        function tableNewProduct(){
            $q="SELECT id_produk, nama, foto, harga FROM produk WHERE status='new'";
            return $this->db->query($q);
        }

        function tableNewProduct5(){
            $q="SELECT id_produk, nama, foto, merek, harga FROM produk WHERE status='new' LIMIT 5";
            return $this->db->query($q);
        }

        function listPatung(){
          $q="SELECT p.*, k.kategori as KategoriName FROM produk as p inner join kategori as k on p.id_kategori=k.id_kategori WHERE k.id_kategori = 7 LIMIT 6";
          // $q="SELECT id_produk, nama, foto, harga, stok, merek, spesifikasi, harga_baru FROM produk WHERE id_kategori = 7 LIMIT 6";
          return $this->db->query($q);
        }

        function listSeniman(){
          $q="SELECT p.*, k.kategori as KategoriName FROM produk as p inner join kategori as k on p.id_kategori=k.id_kategori WHERE k.id_kategori = 8 LIMIT 6";
          // $q="SELECT id_produk, nama, foto, harga, stok, merek, spesifikasi, harga_baru FROM produk WHERE id_kategori = 8 LIMIT 6";
          return $this->db->query($q);
        }

        function tableFiguratif(){
          $q="SELECT id_produk, nama, foto, harga, merek, stok, harga_baru FROM produk WHERE id_kategori = 1";
          return $this->db->query($q);
        }

        function tableAbstrak(){
          $q="SELECT id_produk, nama, foto, harga, merek, stok, harga_baru FROM produk WHERE id_kategori = 2";
          return $this->db->query($q);
        }

        function tableNonfig(){
          $q="SELECT id_produk, nama, foto, harga, merek, stok, harga_baru FROM produk WHERE id_kategori = 3";
          return $this->db->query($q);
        }

        function tableRepresentasional(){
          $q="SELECT id_produk, nama, foto, harga, merek, stok, harga_baru FROM produk WHERE id_kategori = 4";
          return $this->db->query($q);
        }

        function tableRelief(){
          $q="SELECT id_produk, nama, foto, harga, merek, stok, harga_baru FROM produk WHERE id_kategori = 5";
          return $this->db->query($q);
        }

        function tablePerformatif(){
          $q="SELECT id_produk, nama, foto, harga, merek, stok, harga_baru FROM produk WHERE id_kategori = 6";
          return $this->db->query($q);
        }
        function tableFeaturedProduct(){
            $q="SELECT id_produk, nama, foto, harga, harga_baru FROM produk WHERE harga_baru!=0 and status='old'";
            return $this->db->query($q);
        }

        function tableFeaturedProduct5(){
            $q="SELECT id_produk, nama, foto, harga, harga_baru FROM produk WHERE harga_baru!=0 and status='old' LIMIT 5";
            return $this->db->query($q);
        }

        function tableNewProductData(){
            $q="SELECT p.*, k.kategori as KategoriName FROM produk as p inner join kategori as k on p.id_kategori=k.id_kategori WHERE status='new'";
            return $this->db->query($q);
        }

        function tableFeaturedProductData(){
            $q="SELECT p.*, k.kategori as KategoriName FROM produk as p inner join kategori as k on p.id_kategori=k.id_kategori WHERE harga_baru!=0 and status='old'";
            return $this->db->query($q);
        }

        function tableProduct(){
            $q="SELECT p.*, k.kategori as KategoriName FROM produk as p inner join kategori as k on p.id_kategori=k.id_kategori";
            return $this->db->query($q);
        }

        function productDetail(){
          $id_produk = $_GET['id'];
          $q = "SELECT id_produk, foto, nama, harga, harga_baru, stok, spesifikasi FROM produk where id_produk=".$id_produk;
          return $this->db->query($q);
        }



    }

?>
