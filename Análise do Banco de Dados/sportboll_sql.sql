/*==============================================================*/
/* Table: CIDADES                                               */
/*==============================================================*/
create table CIDADES (
ID_CIDADE            INTEGER                        not null AUTO_INCREMENT,
NOME                 CHAR(255)                      not null,
UF                   CHAR(2)                        not null,
CEP                  CHAR(20),
constraint PK_CIDADES primary key (ID_CIDADE)
);

/*==============================================================*/
/* Table: GINASIO                                               */
/*==============================================================*/
create table GINASIO (
ID_GINASIO           INTEGER                        not null AUTO_INCREMENT,
NOME                 CHAR(255)                      not null,
EMAIL                CHAR(255)                      not null,
CIDADE               CHAR(255)                      not null,
TELEFONE             CHAR(20)                       not null,
LOGIN                CHAR(100)                      not null,
SENHA                CHAR(100)                      not null,
DOCUMENTO            CHAR(255)                      not null,
constraint PK_GINASIO primary key (ID_GINASIO)
);

/*==============================================================*/
/* Table: HORARIO_QUADRA                                        */
/*==============================================================*/
create table HORARIO_QUADRA (
ID_HORARIO_QUADRA    INTEGER                        not null AUTO_INCREMENT,
ID_QUADRA            INTEGER,
INICIO               DATE                           not null,
FIM                  DATE                           not null,
SEGUNDA              SMALLINT,
TERCA                SMALLINT,
QUARTA               SMALLINT,
QUINTA               SMALLINT,
SEXTA                SMALLINT,
SABADO               SMALLINT,
DOMINGO              SMALLINT,
constraint PK_HORARIO_QUADRA primary key (ID_HORARIO_QUADRA)
);

/*==============================================================*/
/* Table: PESSOA                                                */
/*==============================================================*/
create table PESSOA (
ID_PESSOA            INTEGER                        not null AUTO_INCREMENT,
ID_CIDADE            INTEGER,
NOME                 CHAR(255)                      not null,
EMAIL                CHAR(200)                      not null,
TELEFONE             CHAR(20),
LOGIN                CHAR(100)                      not null,
SENHA                CHAR(100)                      not null,
constraint PK_PESSOA primary key (ID_PESSOA)
);

/*==============================================================*/
/* Table: QUADRA                                                */
/*==============================================================*/
create table QUADRA (
ID_QUADRA            INTEGER                        not null AUTO_INCREMENT,
ID_GINASIO           INTEGER,
DESCRICAO            CHAR(255)                      not null,
TIPO                 CHAR(255)                      not null,
HORARIO              DATE                           not null,
constraint PK_QUADRA primary key (ID_QUADRA)
);

/*==============================================================*/
/* Table: RESERVA                                               */
/*==============================================================*/
create table RESERVA (
ID_RESERVA           INTEGER                        not null AUTO_INCREMENT,
ID_PESSOA            INTEGER,
ID_QUADRA            INTEGER,
DATA                 DATE                           not null,
STATUS_PAG           CHAR(100)                      not null,
STATUS_RESERVA       CHAR(100)                      not null,
INICIO               DATE,
FIM                  DATE,
DATA_RESERVADA       DATE,
constraint PK_RESERVA primary key (ID_RESERVA)
);

alter table HORARIO_QUADRA
   add constraint FK_HORARIO__REFERENCE_QUADRA foreign key (ID_QUADRA)
      references QUADRA (ID_QUADRA);

alter table PESSOA
   add constraint FK_PESSOA_REFERENCE_CIDADES foreign key (ID_CIDADE)
      references CIDADES (ID_CIDADE);

alter table QUADRA
   add constraint FK_QUADRA_REFERENCE_GINASIO foreign key (ID_GINASIO)
      references GINASIO (ID_GINASIO);

alter table RESERVA
   add constraint FK_RESERVA_REFERENCE_PESSOA foreign key (ID_PESSOA)
      references PESSOA (ID_PESSOA);

alter table RESERVA
   add constraint FK_RESERVA_REFERENCE_QUADRA foreign key (ID_QUADRA)
      references QUADRA (ID_QUADRA);

