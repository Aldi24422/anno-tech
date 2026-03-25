#!/bin/bash
# =============================================================
# Script: rename_images.sh
# Deskripsi: Rename file gambar portfolio anno.tech dari
#            nama WhatsApp/Screenshot ke format SEO-friendly.
# Jalankan dari root project: bash rename_images.sh
# =============================================================

BASE="public/assets/showcase"

echo "🔄 Memulai proses rename gambar portfolio..."
echo ""

# ---- WEB ----
echo "📂 Folder: web/"
mv "$BASE/web/WhatsApp Image 2026-03-23 at 9.27.20 PM.jpeg" "$BASE/web/jasa-pembuatan-website-company-profile.jpeg" 2>/dev/null && echo "  ✅ jasa-pembuatan-website-company-profile.jpeg" || echo "  ⚠️  web: file sudah di-rename atau tidak ditemukan"

# ---- ANNOGRAM ----
echo ""
echo "📂 Folder: annogram/"
mv "$BASE/annogram/Screenshot 2025-12-31 171947.png" "$BASE/annogram/aplikasi-chat-annogram.png" 2>/dev/null && echo "  ✅ aplikasi-chat-annogram.png" || echo "  ⚠️  annogram file 1: sudah di-rename atau tidak ditemukan"
mv "$BASE/annogram/Screenshot 2025-12-31 173427.png" "$BASE/annogram/aplikasi-chat-annogram-fitur-chat.png" 2>/dev/null && echo "  ✅ aplikasi-chat-annogram-fitur-chat.png" || echo "  ⚠️  annogram file 2: sudah di-rename atau tidak ditemukan"
mv "$BASE/annogram/Screenshot 2025-12-31 205808.png" "$BASE/annogram/aplikasi-chat-annogram-dashboard.png" 2>/dev/null && echo "  ✅ aplikasi-chat-annogram-dashboard.png" || echo "  ⚠️  annogram file 3: sudah di-rename atau tidak ditemukan"
mv "$BASE/annogram/WhatsApp Image 2026-01-12 at 5.09.45 AM.jpeg" "$BASE/annogram/aplikasi-chat-annogram-profil.jpeg" 2>/dev/null && echo "  ✅ aplikasi-chat-annogram-profil.jpeg" || echo "  ⚠️  annogram file 4: sudah di-rename atau tidak ditemukan"

# ---- KURASH USUL SCORING ----
echo ""
echo "📂 Folder: kurash usul scoring/"
mv "$BASE/kurash usul scoring/Screenshot 2026-01-12 051437.png" "$BASE/kurash usul scoring/aplikasi-scoring-kurash-usul.png" 2>/dev/null && echo "  ✅ aplikasi-scoring-kurash-usul.png" || echo "  ⚠️  kurash file 1: sudah di-rename atau tidak ditemukan"
mv "$BASE/kurash usul scoring/Screenshot 2026-01-12 051503.png" "$BASE/kurash usul scoring/aplikasi-scoring-kurash-bracket.png" 2>/dev/null && echo "  ✅ aplikasi-scoring-kurash-bracket.png" || echo "  ⚠️  kurash file 2: sudah di-rename atau tidak ditemukan"
mv "$BASE/kurash usul scoring/Screenshot 2026-01-12 051533.png" "$BASE/kurash usul scoring/aplikasi-scoring-kurash-juri.png" 2>/dev/null && echo "  ✅ aplikasi-scoring-kurash-juri.png" || echo "  ⚠️  kurash file 3: sudah di-rename atau tidak ditemukan"
mv "$BASE/kurash usul scoring/Screenshot 2026-01-12 051559.png" "$BASE/kurash usul scoring/aplikasi-scoring-kurash-timer.png" 2>/dev/null && echo "  ✅ aplikasi-scoring-kurash-timer.png" || echo "  ⚠️  kurash file 4: sudah di-rename atau tidak ditemukan"
mv "$BASE/kurash usul scoring/Screenshot 2026-01-12 051617.png" "$BASE/kurash usul scoring/aplikasi-scoring-kurash-tv.png" 2>/dev/null && echo "  ✅ aplikasi-scoring-kurash-tv.png" || echo "  ⚠️  kurash file 5: sudah di-rename atau tidak ditemukan"

# ---- WOODBALL SCOREBOARD ----
echo ""
echo "📂 Folder: woodball scoreboard/"
mv "$BASE/woodball scoreboard/WhatsApp Image 2026-01-11 at 7.37.37 PM (1).jpeg" "$BASE/woodball scoreboard/aplikasi-scoreboard-woodball.jpeg" 2>/dev/null && echo "  ✅ aplikasi-scoreboard-woodball.jpeg" || echo "  ⚠️  woodball file 1: sudah di-rename atau tidak ditemukan"
mv "$BASE/woodball scoreboard/WhatsApp Image 2026-01-11 at 7.37.37 PM.jpeg" "$BASE/woodball scoreboard/aplikasi-scoreboard-woodball-dashboard.jpeg" 2>/dev/null && echo "  ✅ aplikasi-scoreboard-woodball-dashboard.jpeg" || echo "  ⚠️  woodball file 2: sudah di-rename atau tidak ditemukan"
mv "$BASE/woodball scoreboard/WhatsApp Image 2026-01-11 at 7.37.38 PM.jpeg" "$BASE/woodball scoreboard/aplikasi-scoreboard-woodball-statistik.jpeg" 2>/dev/null && echo "  ✅ aplikasi-scoreboard-woodball-statistik.jpeg" || echo "  ⚠️  woodball file 3: sudah di-rename atau tidak ditemukan"
mv "$BASE/woodball scoreboard/WhatsApp Image 2026-01-11 at 7.37.39 PM.jpeg" "$BASE/woodball scoreboard/aplikasi-scoreboard-woodball-atlet.jpeg" 2>/dev/null && echo "  ✅ aplikasi-scoreboard-woodball-atlet.jpeg" || echo "  ⚠️  woodball file 4: sudah di-rename atau tidak ditemukan"
mv "$BASE/woodball scoreboard/WhatsApp Image 2026-01-11 at 7.37.40 PM.jpeg" "$BASE/woodball scoreboard/aplikasi-scoreboard-woodball-pairing.jpeg" 2>/dev/null && echo "  ✅ aplikasi-scoreboard-woodball-pairing.jpeg" || echo "  ⚠️  woodball file 5: sudah di-rename atau tidak ditemukan"

# ---- SINIOPS ----
echo ""
echo "📂 Folder: siniops/"
mv "$BASE/siniops/WhatsApp Image 2026-01-12 at 5.23.09 AM.jpeg" "$BASE/siniops/jasa-pembuatan-website-siniops.jpeg" 2>/dev/null && echo "  ✅ jasa-pembuatan-website-siniops.jpeg" || echo "  ⚠️  siniops file 1: sudah di-rename atau tidak ditemukan"
mv "$BASE/siniops/WhatsApp Image 2026-01-12 at 5.23.10 AM (1).jpeg" "$BASE/siniops/aplikasi-kasir-siniops-menu.jpeg" 2>/dev/null && echo "  ✅ aplikasi-kasir-siniops-menu.jpeg" || echo "  ⚠️  siniops file 2: sudah di-rename atau tidak ditemukan"
mv "$BASE/siniops/WhatsApp Image 2026-01-12 at 5.23.10 AM.jpeg" "$BASE/siniops/aplikasi-kasir-siniops-transaksi.jpeg" 2>/dev/null && echo "  ✅ aplikasi-kasir-siniops-transaksi.jpeg" || echo "  ⚠️  siniops file 3: sudah di-rename atau tidak ditemukan"
mv "$BASE/siniops/WhatsApp Image 2026-01-12 at 5.23.11 AM (1).jpeg" "$BASE/siniops/aplikasi-kasir-siniops-stok.jpeg" 2>/dev/null && echo "  ✅ aplikasi-kasir-siniops-stok.jpeg" || echo "  ⚠️  siniops file 4: sudah di-rename atau tidak ditemukan"
mv "$BASE/siniops/WhatsApp Image 2026-01-12 at 5.23.11 AM.jpeg" "$BASE/siniops/aplikasi-kasir-siniops-laporan.jpeg" 2>/dev/null && echo "  ✅ aplikasi-kasir-siniops-laporan.jpeg" || echo "  ⚠️  siniops file 5: sudah di-rename atau tidak ditemukan"
mv "$BASE/siniops/WhatsApp Image 2026-01-12 at 5.23.12 AM (1).jpeg" "$BASE/siniops/aplikasi-kasir-siniops-qris.jpeg" 2>/dev/null && echo "  ✅ aplikasi-kasir-siniops-qris.jpeg" || echo "  ⚠️  siniops file 6: sudah di-rename atau tidak ditemukan"
mv "$BASE/siniops/WhatsApp Image 2026-01-12 at 5.23.12 AM (2).jpeg" "$BASE/siniops/aplikasi-kasir-siniops-printer.jpeg" 2>/dev/null && echo "  ✅ aplikasi-kasir-siniops-printer.jpeg" || echo "  ⚠️  siniops file 7: sudah di-rename atau tidak ditemukan"
mv "$BASE/siniops/WhatsApp Image 2026-01-12 at 5.23.12 AM.jpeg" "$BASE/siniops/aplikasi-kasir-siniops-dashboard.jpeg" 2>/dev/null && echo "  ✅ aplikasi-kasir-siniops-dashboard.jpeg" || echo "  ⚠️  siniops file 8: sudah di-rename atau tidak ditemukan"
mv "$BASE/siniops/WhatsApp Image 2026-01-12 at 5.23.13 AM.jpeg" "$BASE/siniops/aplikasi-kasir-siniops-akses.jpeg" 2>/dev/null && echo "  ✅ aplikasi-kasir-siniops-akses.jpeg" || echo "  ⚠️  siniops file 9: sudah di-rename atau tidak ditemukan"

echo ""
echo "🎉 Proses rename selesai! Total 24 file telah di-rename."
echo "💡 Pastikan untuk commit perubahan ini ke Git."
