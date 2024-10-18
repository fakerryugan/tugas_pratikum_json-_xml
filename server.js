const express = require("express");
const app = express();
const port = 3000;
app.use(express.json());
let komik = [
  {
    id: 1,
    nama: "Boku no Hero Academia",
    chapter: 35,
    genre: ["action", "adventure"],
  },
  {
    id: 2,
    nama: "Kono Sekai ga Tensei Shita Nara, Shiranai Nara",
    chapter: 25,
    genre: ["adventure", "fantasy"],
  },
  {
    id: 3,
    nama: "Kimi to Warui Koto ga Shitai",
    chapter: 32,
    genre: ["action", "school"],
  },
  {
    id: 4,
    nama: "Dungeon Defense",
    chapter: 10,
    genre: ["action", "adventure"],
  },
  {
    id: 5,
    nama: "Osanai Fusai wa Itonamitai",
    chapter: 1,
    genre: ["action", "fantasy"],
  },
  {
    id: 6,
    nama: "Free2Play",
    chapter: 39,
    genre: ["action", "drama"],
  },
];
app.get("/komik", (req, res) => {
  res.json(komik);
});
app.post("/komik", (req, res) => {
  const newkomik = req.body;
  newkomik.id = komik.length + 1;
  komik.push(newkomik);
  res.status(201).json(newkomik);
});
app.delete("/komik/:id", (req, res) => {
  const id = parseInt(req.params.id);
  komik = komik.filter((komik) => komik.id !== id);
  res.status(204).send();
});
app.listen(port, () => {
  console.log(`Server berjalan di http://localhost:${port}`);
});
