# PHP + Vue OOP Example

This project is composed of a PHP API built using Lumen. The API is consumed by a Vue-CLI SPA. On both sides of the project, the idea is to exercise the implementation code best practices in general. As highlights, we can see in the API:
- OOP principles (Classes, inheritance, abstract classes, interfaces, exceptions, etc)
- Unit tests
- Class auto-loading
- Dependency injection
- Dependency management with Composer

On the Vue front-end, the implementation includes:
- Vue router
- Component splitting for reusability
- Class binding
- Vue-x for data management
- Async API request handling
- Tailwind CSS library with mobile-first methodology


### Installation

#### In the api folder:
- Create a `.env` file (or copy `.env.example`)
- Run `composer install`

- To serve the API locally you can use the following command:
- `php -S localhost:8000 -t public` . If you choose to use another domain or port, please remember to update this info in the `.env` file.
- To run unit tests, use `phpunit`

#### In the front-end folder:
- Run `npm install`
- Run `npm run serve` for compiling and hot-reloads for development
- In case you hosted the API with a different domain/port than the default one (`http://localhost:8000`), you must create a `.env` file (or copy `.env.example`) setting the correct value for `VUE_APP_API_BASE_URL`.

