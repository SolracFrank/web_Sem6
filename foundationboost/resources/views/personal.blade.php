@extends('plantilla')
@section('content')
<div class="bg-dark">
      <div class="container">
        <h3 class="titulos">RANGOS</h3>
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card mb-3">
              <img src="./images/dclass.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Clase D</h5>
                <p class="card-text">
                  Desechables: Personal utilizado para probar las cualidades
                  anómalas de los SCP. Por lo regular son reclutados del
                  corredor de la muerte de las prisiones de los países afiliados
                  a la organización. La integración La protección de la
                  integridad de este personal es opcional.
                </p>
                <p class="card-text">
                  <small class="text-muted"></small>
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card mb-3">
              <img src="./images/level1.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">RANGO 1 Confidencial</h5>
                <p class="card-text">
                  Las autorizaciones de seguridad de Nivel 1 se conceden al
                  personal que trabaja cerca, pero sin acceso directo, indirecto
                  o de información a objetos anómalos o entidades en contención.
                  Es habitual que las autorizaciones de seguridad de Nivel 1 se
                  concedan al personal que trabaja en posiciones
                  administrativas, logísticas o de conserjería en instalaciones
                  con capacidad de contención, o que deben manejar información
                  confidencial.
                </p>
                <p class="card-text">
                  <small class="text-muted"></small>
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card mb-3">
              <img src="./images/level2.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">RANGO 2 Restringido</h5>
                <p class="card-text">
                  Las autorizaciones de seguridad de Nivel 2 se conceden al
                  personal de seguridad e investigación que requiera el acceso
                  directo a la información relacionada con objetos anómalos y
                  entidades en contención. La mayor parte del personal de
                  investigación, los agentes de campo y los especialistas de
                  contención tienen autorización de seguridad de Nivel 2.
                </p>
                <p class="card-text">
                  <small class="text-muted"></small>
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card mb-3">
              <img src="./images/level 3.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">RANGO 3 Secreto</h5>
                <p class="card-text">
                  Las autorizaciones de seguridad de Nivel 3 se conceden a los
                  superiores del personal de seguridad e investigación que
                  requieran información detallada con respecto al origen, las
                  circunstancias de recuperación y la planificación a largo
                  plazo relacionados a objetos anómalos y entidades en
                  contención. La mayoría del personal de investigación,
                  directores de proyectos, oficiales de seguridad, miembros de
                  los equipos de respuesta y operativos de los Destacamentos
                  Móviles tienen autorización de seguridad de Nivel 3.
                </p>
                <p class="card-text">
                  <small class="text-muted"></small>
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card mb-3">
              <img src="./images/level4.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">RANGO 4 Alto secreto</h5>
                <p class="card-text">
                  Las autorizaciones de seguridad de Nivel 4 se conceden a los
                  superiores del personal de administración que requieren acceso
                  a datos de inteligencia que implican a todo su Sitio y/o
                  región, así como a información estratégica a largo plazo
                  relacionada con operaciones de la Fundación y proyectos de
                  investigación. Habitualmente, las autorizaciones de seguridad
                  de Nivel 4 sólo se conceden a Directores de Sitio, Directores
                  de Seguridad o Comandantes de Destacamentos Móviles.
                </p>
                <p class="card-text">
                  <small class="text-muted"></small>
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card mb-3">
              <img
                src="./images/Council_o5.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">RANGO 5 Thaumiel</h5>
                <p class="card-text">
                  Las autorizaciones de seguridad de Nivel 5 sólo se conceden al
                  personal administrativo de más alto nivel de la Fundación. En
                  la práctica, conceden acceso ilimitado a toda la información
                  estratégica y confidencial. Habitualmente, las autorizaciones
                  de seguridad de Nivel 5 sólo se conceden a miembros del
                  Consejo O5 (Supervisores). Nadie conoce sus rostros o nombres
                  más allá de pocos elegidos por ellos mismos. Son 12 de ellos;
                  y su identificador el prefijo 05- y el número correspondiente,
                  ej: O5-1, O5-2, etc.
                </p>
                <p class="card-text">
                  <small class="text-muted"></small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-warning">
      <div class="container">
        <div class="row">
          <p class="parrafo1">
            <b>Clasificaciones</b><br />
            El consejo 05 ha permitido ha dictaminado que [REDACTADO]; por lo
            tanto, cualquier personal inferior al nivel 2 que ingrese a la web
            de la fundación deberá ser tratada con amnésicos de clase B.
            Cualquier personal, a expceción del nivel 5, que difunda material
            clasificado con personal no autorizado será extrictamente terminado;
            orden dictaminada por el miembro 05-[REDACTADO].
          </p>
        </div>
      </div>
    </div>
@endsection()