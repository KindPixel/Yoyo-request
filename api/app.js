import express from "express"
import router from "./Router/routes";

const app = express();
const PORT = 3005;

app.get("/", (req, res) => {
	res.send("Hello my bruddah")
})

app.use(router);

app.listen(PORT, () => {
	console.log(`API listening on port : ${PORT}`)
})