# Host: 127.0.0.1  (Version 5.5.5-10.1.28-MariaDB)
# Date: 2018-01-16 12:30:29
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "admin"
#


CREATE TABLE `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT NULL,
  `adsoy` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `yetki` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'brkbrk','123','aktif','burak altin','6757657657','admin');

#
# Structure for table "ayarlar"
#


CREATE TABLE `ayarlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `smtpserver` varchar(255) DEFAULT NULL,
  `smtpport` int(11) DEFAULT NULL,
  `smtpemail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `sehir` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hakkimizda` text,
  `iletisim` text,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "ayarlar"
#

INSERT INTO `ayarlar` VALUES (1,'Spor','','',NULL,'',0,'','','','','',NULL,NULL,'<p><em><strong>Altingoz Planet, e-ticaret sektorunde faaliyet gostermek uzere, Altingoz Grubu ile Guney Kore&rsquo;nin en buyuk gruplarindan SK Group&rsquo;un ortakliginda Haziran 2012&rsquo;de kuruldu.</strong></em></p>\r\n\r\n<p><em><strong>Altingoz Planet, SK Group&rsquo;un teknoloji ve inovasyon konusundaki tecrubesini Altingoz Grubu&rsquo;nun bilgi birikimi, bolgesel tecrubesi ve gucu ile birlestirmektedir.</strong></em></p>\r\n\r\n<p><em><strong>Bu guclu ortaklik cercevesinde, Altingoz Planet e-ticaret yatirimi olarak, binlerce marka ve magazayi milyonlarca musteriyle bulusturan acik pazar platformu alisverisin ugurlu adresi &ldquo;burakaltingoz.xyz&rdquo;u acti.</strong></em></p>\r\n\r\n<p><em><strong>burakaltingoz.xyz</strong></em><em><strong>; elektronikten tekstile, mutfak gereclerinden Turkiye&rsquo;nin nadide el sanatlarina kadar farkli ihtiyac ve zevklere hitap eden milyonlarca urun, alisveris yaptikca kazandiran yapisi ile uyelerine yeni bir alisveris deneyimi sunuyor. burakaltingoz.xyz, musteriler tarafinda guven ve kolaylik, magazalar tarafinda ise isbirligi ve e-ticareti gelistirme odakli bir yaklasim izlemektedir.</strong></em></p>\r\n\r\n<p><em><strong>Siz de alisverisin ugurlu dunyasina katilabilir, milyonlarca urun ve binlerce magazanin oldugu burakaltingoz.xyz&rsquo;de, avantaj dolu alisverisin keyfini cikartabilirsiniz.</strong></em></p>\r\n\r\n<p><em><strong>Ugurlu alisverisler.</strong></em></p>\r\n','<p background-color:=\"\" font-size:=\"\" noto=\"\" style=\"margin: 0px 0px 10px; line-height: 1.6em; font-family: \"><strong>Altingoz Planet Elektronik Ticaret ve Bilisim Hizmetleri A.S.</strong><br />\r\n<em>Katar Cad. No: 4, ITU Teknokent ARI 3, Ic Kapi No: 803 - 902<br />\r\nSariyer / Istanbul Bina Kodu: 902 - 1580880019<br />\r\nAltingoz Planet Mersis No: 0309034533200013<br />\r\nAltingoz Planet KEP (Kayitli e-posta adresi) : altingozplanet@hs01.kep.tr<br />\r\nSariyer Vergi Dairesi - Vergi No: 3090345332<br />\r\nTicaret Sicil No: 824 112<br />\r\nTelefon : 0850 333 0011</em></p>\r\n','','','',''),(2,'aksesuar',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'Ayakkabi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'Giyim',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

#
# Structure for table "il"
#

CREATE TABLE `il` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "il"
#


#
# Structure for table "ilce"
#

CREATE TABLE `ilce` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "ilce"
#


#
# Structure for table "kategoriler"
#


CREATE TABLE `kategoriler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `adi` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "kategoriler"
#

INSERT INTO `kategoriler` VALUES (1,1,'Spor','spor ürünleri','spor,nike,adidas ',NULL,'AKT?F',NULL),(2,2,'aksesuar','taki toka','kolye,yüzük',NULL,'AKT?F',NULL),(3,3,'Ayakkabi','her türden ayakkabi','nike, adidas',NULL,'AKT?F',NULL),(4,4,'Giyim','giyim türleri','bluz,kazak,elbise',NULL,'AKT?F',NULL);

#
# Structure for table "mesajlar"
#


CREATE TABLE `mesajlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` int(10) DEFAULT NULL,
  `mesaj` text,
  `durum` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  `IP` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "mesajlar"
#

INSERT INTO `mesajlar` VALUES (1,'sads',NULL,NULL,'ffs',NULL,'0000-00-00 00:00:00','::1'),(2,'sfsf',NULL,NULL,'fd',NULL,NULL,'::1'),(3,'asas',NULL,NULL,'sdfsdfsd',NULL,NULL,'::1'),(4,'fdsfsd',NULL,NULL,'fggdfg',NULL,NULL,'::1'),(6,'hasan asan',NULL,NULL,'merhaba',NULL,NULL,'::1'),(8,'ss','ss',NULL,'ss',NULL,NULL,'::1'),(9,'sa karde','sakardes@hotmail.com',NULL,'naber',NULL,NULL,'::1'),(10,'hghjghj','gjkgjjk',NULL,'jgkg',NULL,NULL,'::1');

#
# Structure for table "sepet"
#

CREATE TABLE `sepet` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_id` varchar(255) DEFAULT NULL,
  `urun_id` varchar(255) DEFAULT NULL,
  `adet` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `resim` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "sepet"
#


#
# Structure for table "siparis"
#

CREATE TABLE `siparis` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_id` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  `IP` varchar(255) DEFAULT NULL,
  `tutar` varchar(255) DEFAULT NULL,
  `odemesekli` varchar(255) DEFAULT NULL,
  `siparisdurumu` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `ilce` varchar(255) DEFAULT NULL,
  `sehir` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `adsoy` varchar(255) DEFAULT NULL,
  `odemedurumu` varchar(255) DEFAULT NULL,
  `kargo` varchar(255) DEFAULT NULL,
  `aciklama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

#
# Data for table "siparis"
#

INSERT INTO `siparis` VALUES (1,'123',NULL,'1','12','Kredi Kart?','onaylandi',NULL,NULL,NULL,NULL,'Burak Altingöz','Ödendi',NULL,NULL),(2,'234',NULL,NULL,'1435',NULL,'onaylandi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'dfd'),(3,'2342',NULL,NULL,'354435',NULL,'onaylandi',NULL,NULL,NULL,NULL,'asd',NULL,NULL,'sdfdsfd'),(4,'433543',NULL,NULL,'15',NULL,'onaylandi',NULL,NULL,NULL,NULL,'dsdffs',NULL,'aws','arf'),(5,'2',NULL,'::1','195',NULL,'kargoda','eruh',NULL,'sivas','222','eruhlu',NULL,NULL,NULL),(6,'2',NULL,'::1','195',NULL,'kargoda','eruh',NULL,'sivas','222','eruhlu',NULL,NULL,NULL),(7,'2',NULL,'::1','195',NULL,'kargoda','eruh',NULL,'sivas','222','eruhlu',NULL,NULL,NULL),(8,'9',NULL,'::1','28',NULL,'onaylandi','ankara',NULL,'','32434','asd',NULL,NULL,NULL),(9,'9',NULL,'::1','48',NULL,'onaylandi','SiVAS',NULL,'bayburt','05552453435','asd',NULL,'ggg','gfd'),(10,'2',NULL,'::1','1095',NULL,'onaylandi','eruh',NULL,'sivas','222','eruhlu',NULL,NULL,NULL),(11,'2',NULL,'::1','730',NULL,NULL,'eruh',NULL,'sivas','222','eruhlu',NULL,NULL,NULL),(12,'2',NULL,'::1','1170',NULL,'onaylandi','eruh',NULL,'sivas','222','hasan cengiz',NULL,'dsfdsf',''),(13,'2',NULL,'::1','35',NULL,NULL,'ankara',NULL,'aydin','222432','hasan cengiz',NULL,NULL,NULL),(14,'2',NULL,'::1','260',NULL,NULL,'eruh',NULL,'sivas','222','hasan cengiz',NULL,NULL,NULL);

#
# Structure for table "siparis_urunler"
#

CREATE TABLE `siparis_urunler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_id` varchar(255) DEFAULT NULL,
  `siparis_id` varchar(255) DEFAULT NULL,
  `urun_id` varchar(255) DEFAULT NULL,
  `adet` varchar(255) DEFAULT NULL,
  `fiyat` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  `adi` varchar(255) DEFAULT NULL,
  `tutar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "siparis_urunler"
#

INSERT INTO `siparis_urunler` VALUES (1,'5454','2gfds','34rtf','22','13',NULL,'asd','45'),(2,'2',NULL,'1','15','13.00',NULL,'kuma? pantalon','195'),(3,'9',NULL,'2','2','14.00',NULL,'boxer','28'),(4,'9',NULL,'4','4','12.00',NULL,'bluz','48'),(5,'2',NULL,'3','3','365.00',NULL,'çorap','1095'),(6,'2',NULL,'3','2','365.00',NULL,'çorap','730'),(7,'2',NULL,'10','2','35.00',NULL,'Spor Corabi','70'),(8,'2',NULL,'17','2','550.00',NULL,'Babalot Tenis Raketi','1100'),(9,'2',NULL,'10','','35.00',NULL,'Spor Corabi','0'),(10,'2',NULL,'10','1','35.00',NULL,'Spor Corabi','35'),(11,'2',NULL,'20','1','260.00',NULL,'Cocuk Kapsonlu Kazak','260');

#
# Structure for table "urunler"
#

CREATE TABLE `urunler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) DEFAULT NULL,
  `kodu` varchar(255) DEFAULT NULL,
  `turu` varchar(10) DEFAULT NULL,
  `kategori` varchar(11) DEFAULT NULL,
  `afiyat` float DEFAULT NULL,
  `sfiyat` float(7,2) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `aciklama` text,
  `durum` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `grubu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

#
# Data for table "urunler"
#

INSERT INTO `urunler` VALUES (10,'Spor Corabi','122','pasif','1',20,35.00,150,NULL,'spor,nike,adidas','So?uk havalar icin uygun spor corap','','0000-00-00 00:00:00','1111.jpg','kampanya'),(11,'Kumas Pantolon','2456','pasif','4',300,350.00,2000,NULL,'kumas,pantolon,erkek,giyim,','Yeni moda erkek kumas pantolon','','0000-00-00 00:00:00','311.jpg','kampanya'),(12,'Altin Kolye','13234','','2',1000,1200.00,100,NULL,'altin,kolye,taki,pirlanta,','Her kadinin hakettigi essiz altin kolye','','0000-00-00 00:00:00','2111.jpg','kampanya'),(13,'Burma Bilezik','321','kadin','2',3000,5000.00,10,NULL,'bilezik,burma,taki,lüks','21 gram burma bilezik 1.sinif iscilik','','0000-00-00 00:00:00','112.jpg','normal'),(14,'Ispanyol paca kadin pantalonu','3545','kadin','4',150,250.00,300,NULL,'ispanyol paca,giyim,moda,kadin','Eskimeyen moda ispanyol paca pantolon','aktif','0000-00-00 00:00:00','121.jpg','yeni'),(15,'Greyder Erkek Ayakkabi','1324','pasif','3',150,250.00,132,NULL,'ayakkabi,rugan,moda,bagcikli,','Yeni moda erkek deri ayakkabisi','','0000-00-00 00:00:00','131.jpg','kampanya'),(16,'Topuklu Bayan Bot','436','kadin','3',345,565.00,1234,NULL,'bot,topuklu,kadin,ayakkabi,','Soguk kis gunleri icin yeni moda kadin botu','','0000-00-00 00:00:00','222.jpg','yeni'),(17,'Babalot Tenis Raketi','tr5565','','1',400,550.00,234,NULL,'raket,tenis,spor,federer','Saglam tenis raketi','','0000-00-00 00:00:00','122.jpg','kampanya'),(18,'Miavento Italyan Tasarim Yüzük','r54534','kadin','2',500,1000.00,1344,NULL,'yüzük,taki,italyan,tasarim','italyan tasar?m? olan nacizane yüzük','','0000-00-00 00:00:00','151.jpg','yeni'),(19,'Kadin Sisme Mont','54345','','4',300,560.00,123,NULL,'sisme,mont,kis,soguk,','So?uk havalar için uygun kadin sisme mont','','0000-00-00 00:00:00','141.jpg','yeni'),(20,'Cocuk Kapsonlu Kazak','14323','','4',150,260.00,130,NULL,'kazak,cocuk,sicak,moda','Cocugunuzu s?cak tutacak kapsonlu kazak','','0000-00-00 00:00:00','161.jpg','yeni'),(21,'Esofman Alti','5432523','pasif','1',100,120.00,134,NULL,'esofman,alt,spor,,giyim,tarz,dar paca','Dar paca esofman alti','','0000-00-00 00:00:00','171.jpg','yeni'),(22,'Nike Spor Ayakkabi','4543','','3',300,500.00,134,NULL,'nike,spor,ayakkabi,yeni moda,dragon','rahat nike spor ayakkabi','','0000-00-00 00:00:00','181.jpg','kampanya'),(23,'Kopcali Bileklik','13442','','2',20,45.00,133,NULL,'bileklik,kocali,taki,aksesuar','Havali Bileklik','','0000-00-00 00:00:00','191.jpg','kampanya'),(24,'Erkek Cocuk Spor Ayakkabisi','1324','','3',300,550.00,130,NULL,'cocuk,cirtcirt,spor,ayakkabi','circirtli erkek cocuk spor ayakkab?s? rahatt?r','','0000-00-00 00:00:00','1101.jpg','yeni');

#
# Structure for table "urunler_resim"
#

CREATE TABLE `urunler_resim` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_id` int(11) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "urunler_resim"
#

INSERT INTO `urunler_resim` VALUES (6,3,'11.jpg');

#
# Structure for table "uyeler"
#

CREATE TABLE `uyeler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT NULL,
  `adsoy` varchar(255) DEFAULT NULL,
  `sehir` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `yetki` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `eposta` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "uyeler"
#

INSERT INTO `uyeler` VALUES (2,'asd','aktif','hasan cengiz','sivas','222','uye','123','eruh','hasan@gmail.com',NULL),(3,'iso','aktif','ismail','Category 3','79879654','satici','12',NULL,NULL,NULL),(4,'dfhfd','aktif','gfdg','Ankara','4554','admin','gh',NULL,NULL,NULL),(6,'ssa','','xx','Ankara','','','1234',NULL,NULL,NULL),(8,'','','kk','','','','',NULL,NULL,NULL),(9,'','aktif','asd','','','','','',NULL,NULL),(11,'r','','fat','Ankara','45555545','reklamci','','hgjk',NULL,NULL);
