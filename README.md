Backend Assesment - Senior

1. Penyebab terjadinya ulasan buruk pada event promo 12.12 adalah informasi stok barang atau produk tidak tersedia secara cepat atau real-time. 
2. Berdasarkan analisa saya, seharusnya setiap transaksi yang dilakukan pada event promo 12.12 dapat memberikan informasi secara langsung tentang stok barang yang tersedia saat itu juga.
3. Secara konsep teknisnya sebagai berikut:
- Format API contohnya: 

  {
  
    status: respon kode seperti (200, 500)
    
    pesan: respon pesan teks ('sukses', 'gagal')
    
    data:[]
    
  }
  
- Kode responnya sebagai berikut:

  200 = sukses atau berhasil
  
  500 = gagal atau data tidak ditemukan

- Database schema dan desain entity:

![toko_online](https://user-images.githubusercontent.com/950977/117690703-55338900-b1e5-11eb-9ad6-fbfd80d3ec33.png)
![toko_online_db](https://user-images.githubusercontent.com/950977/117690731-5d8bc400-b1e5-11eb-871f-2ee93572dbf8.png)


- Desain API endpoint:
