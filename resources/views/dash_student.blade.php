<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{asset ('home')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQSEhUSEhMWFhUXGRcZGBgYGBggIBkdGx0dHxgbHh8aHSggIBslHR0aIjEhJikrMC4uFx8zODMtNygtLisBCgoKDg0OGxAQGzUlICUtLS4vNTIvLS0vLystLS0tLS8vLzgtLS0tLS0tLS0vLS01LS0tLS0vLTUtLS0tLS0tLf/AABEIANwA5QMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABQYDBAcBAgj/xABFEAACAQMCAwYCBgYJAwQDAAABAgMABBESIQUxQQYTIlFhcYGRFDJCUqGxByMzYnLBFUNTgpKy0eHwFqKzg8LD0jREk//EABkBAQADAQEAAAAAAAAAAAAAAAABBAUDAv/EADERAAIBAwMBBgQGAwEAAAAAAAABAgMEERIhMUEFEyJRYZFxsdHhFBUygaHBI1LwQv/aAAwDAQACEQMRAD8A7jSlKAUpSgFKUoBSlKAUpSgFKV5QHtK1ri/ij3eRF/iZR+ZqNk7W2S7G7g//AKL/ACNCMom6VCxdq7JjgXcB/wDUX+ZqShvY3+pIjezKfyNBk2KV5ShJ7SlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlfE0oVSzEAAZJJ2A86A+iaieOdpLa0GZ5VUnkvNj7KN6572v/SiSWisthuDMRuf4B09z8q5lc3LyMXdmZjzZiST7k0wcZVccHSeO/pZdsraRBB9+Tc/BQcD4k1S+I9rLyc/rLmQjyVio+S4FQgrokvCLaaIxWQs3LIDGTK4uC4GWyDsTz8GwqTlqlLqUFYHdgoVmZvqjBJbPkOZr6WykKNJobQhCu2k4UnkD5Gr3a2U0q8KuIY2kMR7qTSPqGOTk2OXhzW1DxOK3/pENpkie7VXXIJaNw4Yr6qd8/u1IUfM51NZyIVDIQXCsoxuwb6pHnmslxYzQEGSOSMncalZc+2QK6GIY47+BI5FkdbErA5IwZVDCI/xafPrUbfcNul4e5nkm1NLGDFPHkmRj/VOWJ98Deg0EBwztbeQfs7mTHkzFh8nzj4Vc+A/pYYYW7iDD78Wx+Kk4PwIrR4n2SjgsJQ8T/SY0jlaXB0+JsNGp5HSOdVC84SYreCdm3nL6UxvpQ41Z8ielBmUT9CcE7QW92pMEofHMciPcHcVJ5r8t2l08TB43ZGHJlJBHxFdQ7HfpOJIhvcdAJgP84/9w+XWowdY1U+TqtK+I3DAEEEHcEdRX3UHYUpSgFKUoBSlKAUpSgFKUoBSlKAUrzNYby6SJGkkYKigliegFAY+J8QjgjaWZgiLzJ/L1PpXDe3HbWS+cohKW4+qnLV+83+nSsXb3ta1/L4crAh/Vr5n759T5dKy9luzRmg+lxzxd5FIv6p9hsdtTHYajy2x61KK85uWyIThfBJLhZe7wXjCt3e+pgThio66diR61J9uezr2s50wlYAEVXGSpIVdRJydy2rY1be1+ILhb1AILpQJArHCzpsGXy7xc6SOowapXEe0Eryz/R3lSKdiTFqz9bdh888vOjPDSXPJAVP2XauWKNFSOESIuhJu6HeKu4wDyzvzxmteHg+CBJqLHlGmC3948kH41O2fDHAGNMI8kGWPu7fyqtUuoQOtG2q1H4UQVpb3YVu771Ef63jKBvfLDNYP6IYbM8S+8ifyJq2rwaLmylz5uxNba2kY5Io9gKpu/fT5F+PZU8eJlIXhDn6jxN7SJ/MjethRdwssg70Fd1bOoA+YO4zzq3taIeaKfgKwDhkY3TKH9wsv5bVMb99SZdlSX6WVnhvaKSNbiN8yJOjIwLHYsclwOWoU7V8ZW6mBjUrEiJHEp5hVHXHUnNTV3wsnOoJKPXwOPZlGCfcVB3fBTn9VknfMb7Pt5dHHtVundwn6FGtbVaezRn4D2baZe/mbubYEAyEZ1EnAVAN2Yn4Vg7UcMS3u5YIizqhAGRvyBIOPLfp0ra4F2pngmhLzSGJCqsmxGgHJUKdvjzq4cE7tpZZo5U+m3YmlhJAZYUznD9FdlBB8uXvZ2OCinsV/sN24ezYRyEvbnGV5lP3l/wDr1ruFhexzRrLEwdGGQw61wDtpHCJUaFoi7RhphCcxrISdWg+XXFbfYDti1jJpclrdz41G5U/fH8x196YPcJtPDO+0rDa3CyIrowZWAII5EHkay5qCwe0pSgFKUoBSlKAUpSgFKVjnk0qzeQJ+QoDlfajttcLfEWuTFb5Dr9mQ/bz7ch7VC/pA7dfTQsMIZYQAzZ5u3kd/qr+J3rH2WTVE0h3LsSx/57n51XoOEtLKyLsqsQW6AZ/Oq0bmOuSfCJqW89EHHdyNvscYe+cytEjCNjE0wzGJMrpLjrgaiPXFWWR4olmvIHkd4+7EpaNUt7kOcNGqgA4xvn41TON2awyBEJOFGSfM18XvF551SOWV3VBhFJ2HQbDrjarEJqUcoqyTpy0vlGa8vpbpxGusoGbuoyxYRhjnSCegwPgKl+FcM0j9Wd9w0v5iPyHTV1r64NwwKCv2tu9P/wAYP+Y/Cpi5nSJNTYVR02+QFZlzcuUtEDRs7KMl3tXg9tbdYxhRgfn6nzPrWtd8Xij+s+T5Dc1WeJ8eeXZfAvkDufc1ENXqlYOW9RnWr2pGPhootE/asfZjJ/iNabdqJTyCD4H/AFrBwzsxd3G8NvIw+9jC/NsCp62/RjfMMsI4/wCOQf8AtBq3G0pJcFGV5cTec+xEL2pl+6nyP+tbkHakH66H+6c/nW3dfowvlGVEUn8Egz/3AfnUBxPs1d2+TNbyKBvqxlf8S5FHaUmuAr24h/69y1WfGIpOT4PkdjW5NArjBGfI+XseY9xXNaluF8deLY+JOoPMexqpVsXHemy9R7TUvDVX/epL8Y4WGGXIz9mX+UmP8/zqG4ZfSWUxbSAwVkIYdHGCRuOm4OcVcrW5WVdSnIP/ADeojjPC9QC7Z/q2P/jJ8j9ny5V5trlweiZyvLJJd5S4Jfspa2D+K3jDtEQ0zXeNogCWkRFOkkHw4PLIqjcXullnllRQiO7FVHIDOwx7V823EJIkliQ4WUBZNt8Kc4zzHqOtbHArNJmZHJB05UjzrTnPQtT4M6EXUkoLks3Ybt4bKN4ZVaSPBMQHNW+7ufqE77cj71N9h+1dwL4xXbEi43XPJW+yF8lPLHniqGOEtFcRo+4LLgjkf+eVWLjLaHt5eqTIfxz/ACqvK4WuMVumW6dvPu5Sls49DuANe18qa+qsnkUpSgFKUoBSlKAGqR2/7amxdYViEhdCTlsYHIdDnr8quxrnH6ULFTc2cjjIPeIfcYZf515nLTFsjS5NJdSkdj7nwtGeY3Ht1/561MSNHAhY7AZJ9SfzOaiL6x7m4ieIaQ7aT5evzH5Vgjs2upHeRj3algo8/Qf61lThCpLvM4i939DTp1J0Yd1jMlsvqRi28l1JI6++5+Q+VZ+BWZDFyN1OlAfv+fsoyflW1w27FvblseJ2bSPbbepbhcGNj9gYP8beKQ/iB8K7VqzjFx6cL+ylC2jOcf8AZ7s3DpijJOwXcnz/ANyfzqj8U4i0zZOwHJfL/epHtTxDU/dD6q8/U/7VYux3ZWKOL6fxDaIbxRnnIehxzOei9faulpQUV3kuWer641y7qHCInsv2Hmul76QiC3G5kfqBz0jP4narLZSWVt4bK1Fww/8A2J/q5/dBGT8AB604pfy3jAzDTED+rgB2HkWx9ZvTkK8xXOvfadoHa17NytVQ+7riN1L+1uXUfch/VqPiPF+NaD8NjP1tTHzZ3JPzNbteYqg7ipLlmpG0ox4iaX9FxjGkMuOqu4/I1I2vErqHHdXLMB9ibxg+mT4h86xUNI16keGRK0oy5iLySwuTi9tvozn+vhPhz+8ANv7wPvVb7U9h5rQd6h7635iVOg6agOXPmMjbpVjAzX3wjiEtm2YRrhP14Cdj5lM/VPpyNaNC+1PTMy7ns3C1Q+5zzhfEWhcMOX2h5j/nWrurrPHkHZhnI556fEGsfbTspE8X0/h+GhO8kYzlD1OCcgea9Paq72Xv9L90x8LcvRunzr1d0NS7yPKONjcaJd1PhmPjVkSwcDxM2hwPvjr/AHh4vnWIwSWkqOcH26jqPxqx8UhycD7YwP408UZ/zD41FcSuhcQK+MFHUMP4ufwrnSrSlFJ/p4YnbxhOWH4luixRvHMoYeIbEehH5GoXtTe6WjUc1Ic+4O1fD2LWsyNGx7tmAI8s7YP+tZuDWGuWWWTxEMQM+nP+VcqcY033mcpcFyrUnWj3WMSfP7HSv0fdr3v+9Ekao0ekjSTuGz59cj8audUD9Flqq/S5FGA0oQf3VBP4tV/rUi8pMzcOOzFKUr0BSlKAUpSgPGr843TXE08uGdikjtgsTg6iNgTzr9HNXEZVSLiV3ECCGdiPcnUR7jUflXKtJxg5I9U6anUjFvGT64fdLOoJHjQjIPRh1rHxa6SCEhdiQQo9+tY7y00XCTLsGOlwPY4NRZsDJE9xMxJwSgz8if8ASsyEIOSk34fL18jSqVaii448W+/p5mKOUA26uAEUd5kjmdyB+QqbimMVt3jcyC/uzHNbdpaq0UYZVOFXmAenrUR2vuMIkY6nJ9hy/GpUlWqKCXU5907eEqzfRJHv6P8As+L24LzfsYvHKTyPPAPuRk+gNWXifEvpkvfYIiTaBDyA5a8ebdPIYrDbxfR+GW9sCRJeFpJCOYjGDj4jSvxatW9Mq6e5RGHUE49gKsXlXGKcTjYUVjvJLZfP7G7XtRHBJZpXZAjPKzH9WP6tR1YnYL61LXsM1uyrcRGPVsrAhkY+Wocm9DzrPdtUxnGUakbyk3jOGBSvnUM4yM/jUdxTigRu7DAMeZxnSOmAObHoK8QpSnJRijrVrwpx1SZuz3aKcE+I8lAyx9gNzXsjuq6mt7hV82hfA99thUpwfg9xo1piyiP9Yy67qX1O3hyPsgbeVIkkhfvbSzvriYZ/W3UhVTnmdBYE/Ic6049nwx4nuZE+0qjeYrCIhb6PGe8XHnqH+tYv6Ti/tF+YqO7SdoL1ZD31tFA7dfo6ZOPJnDE/Ot7sP2kvLi6jhYrNGx/WB40wFH1jkAY9PXAp+XR8yPzWWcYX8klwfif0WXvfrQSbTqNwQdhIB1I6+Y9qq/b3gH0K5DRfsZP1kRHIb7rn0PL0Iqz8UgiS6uI4Md0NOVGNKuQdarjpy26ZNYOJRm44XLE272LhlPUxEHHyUkf3BXW3liTpN5wcrumpRVZLGfn9yOe5126yqMsul/iuM/zqB1ZFyke8Z8QI6YO34bVJ9j58o8Z6HPz/AOfjUre26906gAAqeWB0qlrVGbhjr/Za7l14KrnG25h4TdrPENWCRjUPUcj/ADr44peCEaI1zI58IHmeZNRZ4eY0jnhJGy69+h5n29KlOH2mZpJm+8VT0A6/yqJRhGWpPby9TpCpUlFQaxLz9PMi+AQSQ39qGJBMsbbE/abB5dfOv0KK4xwIpJxe3VmA0ZIz1YAkKPXkfhXaK1KUnKCbMuUFCcox4yKUpXQClKUApSlAeGvzo9jK13PhgJEkkO/U6zX6LNcf7c2H0PiInxiK4GSegbkw+eG+JrnVb0PTyIpOcdXGTU4fxESEo66ZBzU/mPSoztJxAae4j3PXHQDpUlf8P1srqcMAwz5gggfjUdwqw7mCSSQeIq3PoMbD4msqn3edf8eprVnWa7t+vi9CRtuJxaEBkUNpXmfSovtjDlFkHTI+fI1F9nuHrNIyvyC5wDjfNTvH4ljtSi8gVxk+tdNEaVdKLeTh3k69tLUkljb9ix8b/wDyzH0hggjA911HH4Vrk7V9cRkDXczDlIkEg9mjH4ZBr5auN2/8zyXLJJW6x6mwOCStw6OaFHkM8qyTrG2HeLcKinyAxt571s2okFiOHzg/SLh2EMbnU0UWch3PTQASPXFQsvaK7trdLeOZRpXQgWMaz5bknGPPFVy4tposXLzsJycruS2ffP8AtWpCvT0pJmLUo1FJtrfqdX4p2asbW0d5IA4jTLPv3jHlnVzyTXJuzHGoradriaEzOBmMEjAb7zZ57dat3Du218YylxapcIRg6sKWHXI3B+VaEnHLAuFbg4DnbAl0/hgCukZw6M5TjLZ8fEj+KfpFvpjtIIV8oxj8Tk5rV4Rx3iMkgWCe4kc421M3zDZAHqasRuLYAsnBkyPvzZ99sHNTcnafwRQWAhE9ycBUTT3AA8RfPNh6gcid69RnGX6Xk8ypTjvPYy9vrQTW1qt5PDA6kNKx5504IRRucn4bVXE4xFbr3FijwxvgNdSK2uX0UkYXy9PKrM/DltpBBbKLjiEg1STzeLu1/tGzsBn6qjnWpxng1tGwS4afiF4RlYtbAdMnCnSi+/lUyWVhPBOcS1YIm2hCLpXYf8yfes/DlzJcR9JrOdT7rgqfgC1R/C+8TVFMmiSNsFSQSAfEoyDvsRWzDNomeT+ztbpz/hCgH3JFY9BSjcYZtXEoytdS42IHsjDpRpSRucfAVI3PFYSrgSAnS3X8q1eBW6yWyo31TnI5b596hO0NisUgVORXOM5/OvajGrWep7nJ1J0LaLiljG/nuS3ZziGFEEuzD6urqD0re4hfkN3UI1SH5L6mtTjPDu/jjeMeIY+IP+lSNlZCIvIzZLbk+QA5Vzn3edfXy9TtSVZLu+ixv6EVwHh7pxK1UtqYyI5I9yW/AGu/CuVfo04ebi9lvSP1ceUjJ6sccvZf84rq1a1POhauTIxHU9PGRSlK9kilKUApSsc0oUFmOAAST5AbmgPrVXOv00yuLeFQoKNIdRxuCBlcHpnxfKpfspdSTXNxNMcZjhMSZ+pE2plz6nmfX2rU4k54qLi1ChYu7V4XPN2DkB/RMqQPMHNDxJ5Rz3ht+8AWO4UgHGh+fwNY+0N40jG3iGcbt643xUhaYljMMwxInhdTzBHWskHDgkskufrADHl5/PFZDlGNRyksNGsoVJ0lGMsxfukVe/je3eKVDgSxpIpHkdmHwYEY9K1r7ikkuNbbDoBVis4ReWMkIyZrZnmiHV4m/aKPPDeLb0qo1q6ItqWNzDlKUVpT2L3w65MlrBPn9hm3m9FJzAx9NyuakHGxGcc+VVDshxpbWY96NUEgKTIeqnr7g7/OrrfcMktsYDTW7DMUyBn8PQPgHB8j19Ko3ltKXjiavZ91GK0TIiK2S2VpHYs3Vm5nyArPYQZxLJ9dhsPujoorKk6SDbBwdwRuD6g7g1nrOlN9eTVhShs1x0+J6a17y1SVdLrkdPMexrYya9xXhNp5R1lCMlhoihbTRfsnDr0V+f8AiH861Li5ZWWRoJElXdZIjkjy3H86sGmvMV1hXcXnH9FedqmsJ++5D8B45co9wIm/WzAFpJlOvbbIOcbZ5Y/KpDgl9c2kDpDHF30hJadmJY77bFenqayld89eWfSsc1wExnJJ5AAkn2A3rv8AjKkniBV/L6UFmb/o1eE2sid40zh3dtRbPP3zWvxy7MdrI/JrpgiZ59xGcs3sz4A9qnbLhjTgyThoLSPxSPIGQuBvpUNvpPIn1wKovavjX0u4aQDTGAEiT7qL9UY6efxq5bUZanUnyyjeVoKCo0+EaNnxOSIEI2AfMZrbsonmE9w7EiJMknqzEKij1yScehqKFXLi0Is7a3tD+0d1nuP3Sdok9wuSR51bcYxzJLcoRlKWIt7GDs/dtG30eXYgZX0GMmvniNzJcqwiUiIZ1E48WP5VLTcODSiXP2SpA9c4P4msdxEW0WduB3kmEUfdB5sfQDf51lQnGdRSit3/AB5m3OnKFJxlLEVx5vyRc/0QO5sTqACiVhHtjIwpOfPxE7+lXoNVOs7o2E0VoFBtUhi1P1R3Z11N+6xXfyJ8q94/dvBfLMjfq1hBnTzTvNIf3XJPsDWsZUXhYLlSvBXtD2KUpQCtHjdqZbeaJTgvHIo92UgfnW9XlAU2Thb3dvHNbSCJpIUimBB8SD6w23V1OsA/vGpGSNYb6DACrJC8IxyBjIdR/h1fKvnP0Kdidradsk/2Uzc8+SPt7NnzqI7Z8fSVRDaq003eDu3TGmORdx4j4S2ARpB3yRUnN4Syc+7WX0s9/K8UPdyIxVtHNtJwGbpkgfLFY34pI8UiFCsoHLlkfaI9anOLIbpjfWyEXEYAu7bGG8g6jqNvfYetYreeKcK64JHLzHmKoXbxJNxyvMu2ack1GeG+n0NLs/M0EMc8f14yz4+8v20PoRt8j0rT7ZcDVQl7bDNrPuB/ZOfrRnHLfOPlU80YVCAMLhjj351Gdj+IiKKRJx3lpISsqdU5YkX1G2fbzpaV86s8ZF7bY0pc43/bqUvFXrsB27azxBPloCdiOcefLzXPMfKo3tB2OeCRGR1e2lI7ufI0gNy1n7OM8+uKslotlKq2UUsbxgMmkxt3kk5+rKjj7OR5gaQc1fMuKaZauM9nBeOt3ZzRjWoDErqVwN1bKkHVjb4VB8W4FcWid7I0csQxrKBlKfvEEnK+tVThN3d2M030J2liicK+3gYk4HhzzLZAI3q88F/SXbTr3V2nckjDZGpD59Mj4j41xqUIT3aLlK6nDh4+RDIwPIg+29fVW2Ps7w26UmFYv4oWwR/hP51V24FexlkFs8oUkLJriGtc+E4Lc8Yz6is2rYSW8NzVpdoRk/GsGDNeSTKAdTAe/StmHs/eSuiNbtEjMod+8iJVftYAYnOPSrLNwbhdoAZlgUjrK2pj6+IkmlKwk957Cr2jFfoWSv8ACOztxdRiZXjijYZTUrMzDoxAIwD051OcI4KnDu8u7udCdIUHRpCjOTjJJLE4+VRXHP0pQRApap3hGwY+FB7DmfkKqF7b3d7OwvneN0USLEykBkBHed2AcZVMt1JxWlChCG6Rk1bqc9m8/Ix9vO2z3zd2mUgU5A6uRyZv5DpVPxXSL7hXeyzW0yNFapqe3eOOMRIoU6ZGk5sCMbZySagey3ZTvV+lXR7qzTxM55yY+yo57+fy3rsVGm2Z+yPC1gibid0v6uP9hGf62T7Puo/l6V52hVngMsm8ruHc/vN09gNgPSvrtjftOYXx3cCkJDDyCoORP7x/AbVMNEGAyM8iPhy51n3VfDi1xn5GrZ22qM4vZ4+ZAtxGYIkSKWl0jWd/Dnl6Zx51v/o+uJoOIIjRKzzeFmbJZV3JKkHA5b58sVlubuOIYAy7E4VdyzH2rd4dayWRLlDLxG4XEcS79wh21MeWdvPp716tMttqOF8zzepRwnPLXsl9S8WlutzLfNzRgtt6HQra/kzke61ocR4S0NnKsspmuLhY7cMRjn4VCj0BZiepya87J9o4o4VhuEMBUsmtjlJWUkOwk5aiwYkHn0zUtwxTdSi6baJMi3U8znIaU+42XyGT1q8VFuT0YwAPIV9UpUHsUpSgFKUoCA7bIDanUMxh4zMPOIMO8B9Mbn0FbN/weOaAQqAijSYygA0Fd0ZcbbHFScsYYFSMg7EHqDzFVmLiA4f+ouCRBv3EuCQB0hbrqHJfMeooeWY+yeIpZYrgn6a5y7tsJkXOgx8hpAO6jkc551zD9IdqycQfMawByCrLnDg/bPr548vjV37S8Rnl0Ca1jjhfeJ5HdXRhy1OoxE55jO3QmviCGW6eOy4jAHR1cxT6kLjSAT4k2PTxbeoNTg5vyKQnDLlRlZRICMFSTuD6mpLhPDxEhUnIY5IPTI5evKpq97D3VsCYJopIlGcTEqVA578sDz2qpwcclkYrHCCfMMce+fKsutRrY6Y9jVoVreLT3z5cm32W43LazvaECW3YsGifljGcr5EjpyNWG37LpFN9L4f+tTSyvbltMiB1IJRj1GdgfnVag4bIZRO2EcHcA5DDGPgakeIRvjvIXZJUyVZTg+o9vSvavNM0unX4nL8DmnKWN85XwNjgcyxiSC2idHhR5FScqJZrhhoQ4yBpRc8qr/Znso8jvJcxS93EwVkAIeRzjwDqOeot0FTnC+2AvF7m/tVuFUDxrgOPUDbf+Eivq64Da3RH0XiLIyHKxXJYFT6FsEHYefKtDWs4M1weE+nsVzjXBFt1uZQzL3dz3MQB5jBYknnkLisnFONXtlM0C3krFAmd+rKrEYbPLVj4VZr3gl/4+/s4btHkE36uQrh9IUkbg4IG4NVLjHBb+eeSaS0m1u2o6Y2xv0HoBgfCp5PDTXBZuIWty8b6uIXDMIVnb9WUjKEAlQ6tjVg8sb4rUfsXECdMheWO5KGNjjv0AWQhSMYco2cZ3wa0+J2PEblIYvo1yqRxJHpwwVin2sHAyduflUzN2d4lc5aRIrYa4pCzvgq8SaAw05xkcx6U4PXPQ+47C3tY7uK40Lbm6MZ1ai4Tu9Ufd4BOpcqfYHNP+opka3it2W8khyhQKWWRNOY5Q2P1b6SVbfoc5r2fh9pqJv8AiDXchIJig5FgMZITrpAGdq1ONdtHt1+j2VslqrDYjBfnscDYH3zUOazg9qLxnGxI2PZlYPHfyeHJeOySRmVd8jO+MD2x71WuO8XmvbtYpMCKNvDGuyqAPxONs/LFSfD4Sq5di8jbuxJJJ9zv6VHPwyRHaWPSzsTnUcAA9APP1rPd5qlJZ+Bo/gtMYvHXLNni/DhMF813C8gfLNR0/CJmBaWcL5gZwB8Din9OTK6xMiITgZYkLvtknyq7Wn6PZpsG8uF0c9EOfF7sw/lXmjRrYS2x7nu4rUJN4Tz5cFc/RLbyG8LLGrooIeRgcpnlpP3m8vIVfOOqLu4SK2ZlljOJZ05RofrReTO33fs86h7xp0MtraxxW9pAwR3MoQuSqsdTHLDOrmBk+db/AAC+uokLLBGbRCABGjqxH2nQMcuB64LbkVpmWvIsk9tBb2pRlHcRxnIYZGFHXPMn55Ne9mIWS1hVwQwRcg8x5D4DA+FR1vP/AEg6soP0SNgQSCO/deWx/q1O/qQOgqygVB0SPaUpQ9ClKUApSlADVcvdM98sEmyQosqof61ySAQPtLHj5sKsdaHFeFxzrhwcjdWU4ZD5qw3BoQzWvr8iZYWh1RMjM7nTpGMZG532znbyqH4dwSFit1w+XuzpKgFS0eCQWARsFckD6pFbkk0sKmO7UzwEEd8i7hTzEqDfl9pfiBWwtrHIsctuyusauYgrbMxG2WB5c9j55NSeTVveIuEaK+tWMbqVZ4Q0iEHnqGNa7eh9653c9j5EYzcMmS4j6oGGtfQg88euDXSLbiU0X0eKZGd5c6n2AQ8wpxtyDefIUu7OzucswCvsO8BKNuxC4dcHcg433qGk1h8Eb5ynucvW7u08MtjNkeUb/wD1rTuO0L6u7WBg/LS+cg+o2Ndd/ou5jA+jXZZfu3C6wfLxrpb5k1zPifYjiSTPOqrK7MzFkYHnz2fBqu7Slyo/QsfjK62cngw8L4eVbvHjVGI+wW6+Y5V98c4ekkZLYVgNmP5H0rNwfhPEJ3aE6IXA1YlVgdOcahtggHb4itPt52ee0WLvbgyySFvCBpVQPj5n0qtG1quepvBYnd0VScIxb+O25h7OXk0YMRZyhOzRuTg/3Ty5VMXl3fLvBeS/ws2fkSDiovgFlGoBiDTSY3KKzYJ6DAwKm+J8GutKKFETytojQnxt1ZvDkKoGSSd6f5nVzT+wj3Ko4qbvpjn3MNpc3p3nu5mP3VYgfHTg1X+0l1LKRGSQi9ZH5/Mk6as/DuEXfdElBKUZkkVCA6MvmCcEEYIIOSCNqgO0dnEclw0UuPtqy6vQ5G/vSKqqrmp9hJUXRxT/AHzz7m9waxSKMacEkbsOvt6Vr8UsG1d7HGjtzyxPwwOVffYTs3JeRSNDcmJ0YAqVypBGQeeR1HwrLxTg/EY5TAmmdwAzd0udIP1dRYADODgelS7WqqmpPIV5RdJRcWvgR1px+Vn7vuC0mcaUDajjntgmpApxCTwx2MqnzdGH4tpFbfA+wXERcJcs0cTqwbLNq5eicxjbmK6G3CHYH6Vdu4OBpTESe3hOv/uqwrSlzgrK6rtY1PBzux7IIjrLxWdS3MW6eN2HkQuTj0UfGuipeXMoAt4BCg2DXGQcDbwxIc8uWor7Vga/srIlI1UPgnTGAWOAD4j54I5nfNexcWnuInEMZhlDJpMikrjI1E7Dpq29qsYxsjj153C8Ft4pRLct3s7kYaTTzUbaUHhGAee55b1k4Px57mQd3Cwg0g63ypyeQAIwcEcwSPEDWlPwqKP9bfzd4zbBCTj62QqqPE/2Rg5zpFb4jmucKAba3AxgbSuPIY/Zr/3fw1IQ4NIEubiCPeMaZNuSOxPeR55dA+Oms1P1r2VmkSBI1CqOQH5+p9TWxUHpClKUJFKUoBSlKAUpSgPMVD3fAELGSFmglPN48Yb+JT4W+Iz61M0oCBe7uocd5CLhc/XhwrD1MbH/ACsfatRhYXKmHKoS2oocxPqxgNpbBJ322Iq0VrX1hHMpSVFdT0YAj8ak84I5+ESa5ZEnYd5HoUYGI8Y0Ffbxe+a2rEPFDmeQMy6mZ+Qxkn4ALitT/piJcdw8sGP7ORsf4WJX8Kie0tncrGqPdd5FLLDEytEgbS7qD4kwOWfs0I4MVh2ghNxNczFoyEKQLIrLrjHiLKWABZ26cwAK0LSBhdRzcUWBhOshj1HIg0gELv4MEHc+Y510CW3Vl0soK8sEAj5Gq5d9g7VmDoGiZTldByoPojgp+FCHFmT/AKljOY7GI3DDl3Y0xj3kIC49s1t8J4SyyG4uGDzsMbZ0xrn6iA9OWW5k1iHDr1MCO7jcDpJAPzjZR+FD/SA2zat64lH4ZNCfiZOKcMcSfSLUqs2AHVvqzKOSt5MOjDlnfIrWPaWHaO8RrdjtpmXKH2kGUI+PwrNjiB5m1X4St/MV4/CruQFZbxVB5iKFBke8hf8AKg+BWGDrPNd2CwrFCwSRFOO/AUM556ARq2PPbnW/N2hgS8E8JZ4nQJcOqOUTTkxPqAxtllOOQIzyqR4f2FtIjqKGVickyEkZ89OyZ+FT8lsrIYyo0kEEY2wee1CFFkZxd7knTbgYKMde2zbhQM7Y3Bz6Vpx8Jlc95M+nDK4yxOkhdJBAbRpI1HbfLbnatXspZXEtrCzXjhNOkKkcYOF8IyzBiTtzGKlh2YgP7VWmOc5mdn39idI9gKE8kXapYQkpCnfyDfEYMhyOmr6q+gJAqQT6XMB4VtF/uySY/wDGp/xVNRRBQFUAAcgOQr7qD0kR3DuCxRHWAXkPOSQlnPxPIegwKkcV7ShIpSlAKUpQClKUApSlAKUpQClKUApSlAKiu0Vi80OmPHeK8ciZ5ExsGAJwcZxjPrUrQ0BBW3aaLOicNbSctM3hB/hf6rD2NTUcgYZUgjzBB/Kvi4t1caXVWU8wwBHyNRMnZO1JysXdnziLR/5CKEbk5Vafg1yY5oxc/tCNDENmMa3YgHO+xUDywfSs3/TOPqXd2v8A6xb/AMgan9ATDlxC5wPMQn8e7oQfEvCJ2meQzYDRFMAvsxXGdPLAbLZ58qnoVwoBOSABmoT+gJjs1/cn2EI/ER0PZdT9e4u39DO4HyTTQbk1Pcogy7qoHMsQB+NQcnaUSeCzRp3OwcAiJfVpCMY9Fya2IOzFqu/cIx85BrPzfJqWjQAYAAHkKE7mnwKw+j28UJOoooBOMZPU4981v0FKEilKUApSlAKUpQClKUApSlAKUpQClKUApSlAKUpQClKUApSlAK8xXtKA8xXuKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKA//2Q==" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SMK Sungai Ara</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Student</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="{{url ('chatify')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Chat
               
              </p>
            </a>
          </li>
          
          
         
          <li class="nav-item">
            <a href="{{asset ('assignment')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Assignment
              
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="{{asset ('grade')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Grade
              </p>
            </a>
          </li>
        
         
          <li class="nav-item">
            <a href="logout" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Logout</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
@include('alerts')
 @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset ('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset ('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>
</body>
</html>
