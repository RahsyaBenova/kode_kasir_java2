Class Bangun {
  double panjang;
  double lebar;

  // Mnedefinisikan mothod yang mengembalikan nilai
  double hitungluas() {
return luas;
}
}
class pakaiBangun {
    public static void main(String[] args) {
        Bangun b1, b2;
        
        // instansiasi objek
        b1 = new Bangun();
        b2 = new Bangun();
        
        // mengisi data untuk objek b1
        b1.panjang = 4;
        b1.lebar = 3;
        
        // mengisi data untuk objek b2
        b2.panjang = 6;
        b2.lebar = 5;
        
        //memanggil method hitungLuas() untuk masing-masing objek
        System.out.println("Luas b1 = " + b1.hitungLuas());
        System.out.println("Luas b2 = " + b2.hitungLuas());
    }
}