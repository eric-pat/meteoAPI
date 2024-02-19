<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* weather/index.html.twig */
class __TwigTemplate_4a4ea719be7f6b42d219dae4868e85e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "weather/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello WeatherController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Weather -->
    <div class=\"container mt-5\">
        <div class=\"d-flex flex-row justify-content-center align-items-center\">
            <div class=\"weather__card\">
                <div class=\"d-flex flex-row justify-content-center align-items-center\">
                    <div class=\"p-3\">
                        <h2>";
        // line 12
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["weather_data"]) || array_key_exists("weather_data", $context) ? $context["weather_data"] : (function () { throw new RuntimeError('Variable "weather_data" does not exist.', 12, $this->source); })()), "main", [], "any", false, false, false, 12), "temp", [], "any", false, false, false, 12) - 273.15), 0), "html", null, true);
        echo "°</h2>
                    </div>
                    <div class=\"p-3\">
                        <img src=\"https://openweathermap.org/img/w/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["weather_data"]) || array_key_exists("weather_data", $context) ? $context["weather_data"] : (function () { throw new RuntimeError('Variable "weather_data" does not exist.', 15, $this->source); })()), "weather", [], "any", false, false, false, 15), 0, [], "array", false, false, false, 15), "icon", [], "any", false, false, false, 15), "html", null, true);
        echo ".png\"
                             class=\"weather-icon\" alt=\"image meteo\"/>
                    </div>
                    <div class=\"p-3\">
                        <h5 id=\"current-time\">";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["date_time"]) || array_key_exists("date_time", $context) ? $context["date_time"] : (function () { throw new RuntimeError('Variable "date_time" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</h5>
                        <h3>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["weather_data"]) || array_key_exists("weather_data", $context) ? $context["weather_data"] : (function () { throw new RuntimeError('Variable "weather_data" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</h3>
                        <span class=\"weather__description\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["weather_data"]) || array_key_exists("weather_data", $context) ? $context["weather_data"] : (function () { throw new RuntimeError('Variable "weather_data" does not exist.', 21, $this->source); })()), "weather", [], "any", false, false, false, 21), 0, [], "array", false, false, false, 21), "description", [], "any", false, false, false, 21), "html", null, true);
        echo "</span>
                    </div>
                </div>
                <div class=\"weather__status d-flex flex-row justify-content-center align-items-center mt-3\">
                    <div class=\"p-4 d-flex justify-content-center align-items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi
                        bi-droplet\" viewBox=\"0 0 16 16\">
                            <path fill-rule=\"evenodd\"
                                  d=\"M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z\"/>
                            <path fill-rule=\"evenodd\"
                                  d=\"M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z\"/>
                        </svg>
                        <p>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["weather_data"]) || array_key_exists("weather_data", $context) ? $context["weather_data"] : (function () { throw new RuntimeError('Variable "weather_data" does not exist.', 33, $this->source); })()), "main", [], "any", false, false, false, 33), "humidity", [], "any", false, false, false, 33), "html", null, true);
        echo "%</p>
                    </div>
                    <div class=\"p-4 d-flex justify-content-center align-items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi
                        bi-wind\" viewBox=\"0 0 16 16\">
                            <path d=\"M12.5 2A2.5 2.5 0 0 0 10 4.5a.5.5 0 0 1-1 0A3.5 3.5 0 1 1 12.5 8H.5a.5.5 0 0 1 0-1h12a2.5 2.5 0 0 0 0-5m-7 1a1 1 0 0 0-1 1 .5.5 0 0 1-1 0 2 2 0 1 1 2 2h-5a.5.5 0 0 1 0-1h5a1 1 0 0 0 0-2M0 9.5A.5.5 0 0 1 .5 9h10.042a3 3 0 1 1-3 3 .5.5 0 0 1 1 0 2 2 0 1 0 2-2H.5a.5.5 0 0 1-.5-.5\"/>
                        </svg>
                        <p>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["weather_data"]) || array_key_exists("weather_data", $context) ? $context["weather_data"] : (function () { throw new RuntimeError('Variable "weather_data" does not exist.', 40, $this->source); })()), "wind", [], "any", false, false, false, 40), "speed", [], "any", false, false, false, 40), "html", null, true);
        echo " m/s</p>
                    </div>
                </div>
                <div class=\"mt-5 d-flex justify-content-center align-items-center\">
                    Made with &nbsp
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\"
                         class=\"bi bi-heart-fill\" viewBox=\"0 0 16 16\">
                        <path fill-rule=\"evenodd\"
                              d=\"M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314\"/>
                    </svg>
                    &nbsp by &nbsp<a href=\"https://www.epweb.fr/\" target=\"_blank\">Eric</a>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function updateCurrentTime() {
            const currentTimeElement = document.getElementById('current-time');
            const currentTime = new Date();
            currentTimeElement.textContent = currentTime.toLocaleString('fr-FR', {timeZone: 'Europe/Paris'});
        }

        // Mettre à jour l'heure toutes les secondes
        setInterval(updateCurrentTime, 1000);
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "weather/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  181 => 60,  171 => 59,  143 => 40,  133 => 33,  118 => 21,  114 => 20,  110 => 19,  103 => 15,  97 => 12,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello WeatherController!{% endblock %}

{% block body %}
    <!-- Weather -->
    <div class=\"container mt-5\">
        <div class=\"d-flex flex-row justify-content-center align-items-center\">
            <div class=\"weather__card\">
                <div class=\"d-flex flex-row justify-content-center align-items-center\">
                    <div class=\"p-3\">
                        <h2>{{ (weather_data.main.temp - 273.15) | number_format(0) }}°</h2>
                    </div>
                    <div class=\"p-3\">
                        <img src=\"https://openweathermap.org/img/w/{{ weather_data.weather[0].icon }}.png\"
                             class=\"weather-icon\" alt=\"image meteo\"/>
                    </div>
                    <div class=\"p-3\">
                        <h5 id=\"current-time\">{{ date_time }}</h5>
                        <h3>{{ weather_data.name }}</h3>
                        <span class=\"weather__description\">{{ weather_data.weather[0].description }}</span>
                    </div>
                </div>
                <div class=\"weather__status d-flex flex-row justify-content-center align-items-center mt-3\">
                    <div class=\"p-4 d-flex justify-content-center align-items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi
                        bi-droplet\" viewBox=\"0 0 16 16\">
                            <path fill-rule=\"evenodd\"
                                  d=\"M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z\"/>
                            <path fill-rule=\"evenodd\"
                                  d=\"M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z\"/>
                        </svg>
                        <p>{{ weather_data.main.humidity }}%</p>
                    </div>
                    <div class=\"p-4 d-flex justify-content-center align-items-center\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi
                        bi-wind\" viewBox=\"0 0 16 16\">
                            <path d=\"M12.5 2A2.5 2.5 0 0 0 10 4.5a.5.5 0 0 1-1 0A3.5 3.5 0 1 1 12.5 8H.5a.5.5 0 0 1 0-1h12a2.5 2.5 0 0 0 0-5m-7 1a1 1 0 0 0-1 1 .5.5 0 0 1-1 0 2 2 0 1 1 2 2h-5a.5.5 0 0 1 0-1h5a1 1 0 0 0 0-2M0 9.5A.5.5 0 0 1 .5 9h10.042a3 3 0 1 1-3 3 .5.5 0 0 1 1 0 2 2 0 1 0 2-2H.5a.5.5 0 0 1-.5-.5\"/>
                        </svg>
                        <p>{{ weather_data.wind.speed }} m/s</p>
                    </div>
                </div>
                <div class=\"mt-5 d-flex justify-content-center align-items-center\">
                    Made with &nbsp
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\"
                         class=\"bi bi-heart-fill\" viewBox=\"0 0 16 16\">
                        <path fill-rule=\"evenodd\"
                              d=\"M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314\"/>
                    </svg>
                    &nbsp by &nbsp<a href=\"https://www.epweb.fr/\" target=\"_blank\">Eric</a>
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        function updateCurrentTime() {
            const currentTimeElement = document.getElementById('current-time');
            const currentTime = new Date();
            currentTimeElement.textContent = currentTime.toLocaleString('fr-FR', {timeZone: 'Europe/Paris'});
        }

        // Mettre à jour l'heure toutes les secondes
        setInterval(updateCurrentTime, 1000);
    </script>
{% endblock %}
", "weather/index.html.twig", "/Users/eric-pat/meteoAPI/templates/weather/index.html.twig");
    }
}
