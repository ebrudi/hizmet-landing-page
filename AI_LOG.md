# AI Log - Hizmet Landing Page Projesi

## 1. Planlama ve Mimari Kararlar
- **Teknoloji Seçimi:** Arayüz için Tailwind CSS, form doğrulamaları ve kullanıcı deneyimi için JavaScript tercih edildi. Canlı yayın/gösterim aşamasında statik dağıtım için GitHub Pages altyapısı seçildi.
- **Güvenlik ve Doğrulama:** Kullanıcı girdilerinin doğrulanması (boş alan kontrolü, e-posta regex formatı, minimum karakter sınırı) hem istemci tarafında anlık geri bildirim sağlayacak şekilde kurgulandı.

## 2. Geliştirme Süreci ve İstemci Yönetimi
- Form gönderim süreçlerinde kullanıcı deneyimini artırmak adına yükleniyor (`loading`) animasyonları ve başarı/hata durum yönetimleri (`successAlert`) eklendi.
- Kod yapısı mobil uyumlu (responsive) olacak şekilde tasarlandı.

## 3. Dağıtım ve Test
- Proje GitHub üzerine `main` dalı üzerinden yüklenerek sürümlandı.
- GitHub Pages aktif edilerek değerlendirme ekibinin erişebileceği canlı URL adresi sağlandı.