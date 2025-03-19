# Vizualizador de Carros

O Pojeto consite na criação de uma aba de carros, onde será possivel ver:
- Foto do carro
- Ano do carro
- Combustivél usado pelo carro
- Marca do carro
- Modelo do carro

a pessoa poderá cadastrar o carro de após isso te acesso a todas essas coisas, então sera um código totalmente opensource.

## Ferramentas
As ferramentas usadas são:

- **[Laravel](https://laravel.com/docs/contributions).**
- **[Laragon](https://laragon.org/docs/).**
- **[PHP](https://www.php.net/docs.php).**
- **[GitDesktop](https://desktop.github.com/download/).**

## Objetivos
O objetivo deste projeto é colacar em prática aquilo que tem sido aprendido entro do curos de PHP e Laravel dos seguintes canais no 
***YouTube:***

- **[Node-Studio-Treinamentos](https://www.youtube.com/watch?v=SnOlhaJTMTA&list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb&index=1).**
- **[Gordin-de-Óculos-Informática-e-Tecnologia](https://www.youtube.com/watch?v=4EoW20FV6Rc&list=PLds8fm5O3hgyyaO2G9gSPq1Mmwe_cVmh5).**

### Observações:
Entrando no arquivo .env você poderá verificar a conexão com o DB, caso voce tenha problemas com a conexão do DB do Laragon, tente usar esta no lugar:

Conexão com o DB do Laragon:

DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=laravel  
DB_USERNAME=root  
DB_PASSWORD=  

SESSION_DRIVER=file  
SESSION_LIFETIME=120  
SESSION_ENCRYPT=false  
SESSION_PATH=/  
SESSION_DOMAIN=null  

Por padrão o "**DB_CONNECTION**" vem com "**sqlite**" no lugar de "**mysql**", além disto em "**SESSION_DRIVER**" está "**database**" nolugar de "**file**", então é somente você fazer essa troca que a conexão com o DB estará funcionando, além de excluir todo os "#" para ativar.
