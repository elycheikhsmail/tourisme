import nunjucks from "npm:nunjucks";
nunjucks.configure("views");

const options = {
  DB_NAME: `${Deno.env.get("DATABASE")}_db`,
  DB_USER: Deno.env.get("USERNAME"),
  DB_PASSWORD: Deno.env.get("PASSWORD"),
};
const output = nunjucks.render("wp-config.j2", options);
 


Deno.writeTextFileSync("wp-config1.php", output, 
{ create: true });
console.log("create wp-config.php using deno");
