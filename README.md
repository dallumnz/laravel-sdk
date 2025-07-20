<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <h3 align="center">Laravel SDK</h3>

  <p align="center">
    A preconfigured Laravel project to build awesome apps!
    <br />
    <a href="https://github.com/dallumnz/laravel-sdk"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/dallumnz/laravel-sdk">View Code</a>
    ·
    <a href="https://github.com/dallumnz/laravel-sdk/issues">Report Bug</a>
  </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->
## About The Project

Laravel is a great framework but you can do more when you have a solid starting point. laravel-sdk by dalbro web dev aims to be that starting point by providing the following features: 

* Authentication
* Media Library for easy file uploads
* User management
* Role based access control (RBAC)
* Page model
* SEO model
* Analytics model and tracking middleware
* Administration panel (dalbro admin panel)
* Typed application settings

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

This project is built with the TALL stack and other great technologies.

* [Tailwind CSS](https://tailwindcss.com/)
* [Alpine.js](https://alpinejs.dev/)
* [Laravel](https://laravel.com)
* [Livewire](https://laravel-livewire.com/)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple example steps.

### Prerequisites

Before you begin, ensure you have the following software installed on your machine.

* [Docker](https://www.docker.com/get-started)
* [Laravel Sail](https://laravel.com/docs/sail) - (Included with the project)

### Installation

1. Clone the repository
   ```sh
   git clone https://github.com/dallumnz/laravel-sdk.git
   ```
2. Navigate to the project directory
   ```sh
   cd laravel-sdk
   ```
3. Install composer dependencies
   ```sh
   composer install
   ```
4. Install NPM dependencies and build assets
   ```sh
   npm install && npm run build
   ```
5. Create your environment file by copying the example
   ```sh
   cp .env.example .env
   ```
6. Start the application using Laravel Sail
   ```sh
   ./vendor/bin/sail up
   ```
7. Generate the application key
   ```sh
   ./vendor/bin/sail artisan key:generate
   ```
8. Run the database migrations
   ```sh
   ./vendor/bin/sail artisan migrate
   ```
9. **Optional:** If you want to use the MaxMind geolocation features, you will need to add a valid `MAXMIND_LICENSE_KEY` to your `.env` file.
   ```dotenv
   MAXMIND_LICENSE_KEY=your_license_key
   ```
   Then, update the location database with:
   ```sh
   ./vendor/bin/sail artisan location:update
   ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- USAGE EXAMPLES -->
## Usage

Once the application is running, you can access it at [http://localhost](http://localhost). The administration panel is available at [http://localhost/admin](http://localhost/admin).

_For more examples, please refer to the [Documentation](https://github.com/dallumnz/laravel-sdk)_

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- ROADMAP -->
## Roadmap

See the [open issues](https://github.com/dallumnz/laravel-sdk/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->
## Contact

Dallum Brown - dallum.brown@gmail.com

Project Link: [https://github.com/dallumnz/laravel-sdk](https://github.com/dallumnz/laravel-sdk)

<p align="right">(<a href="#readme-top">back to top</a>)</p> 
