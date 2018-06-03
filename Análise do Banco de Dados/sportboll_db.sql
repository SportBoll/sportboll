/*==============================================================*/
/* Table: GINASIO                                               */
/*==============================================================*/
create table GINASIO (
ID_GINASIO           INTEGER        AUTO_INCREMENT                not null,
ID_PROPRIETARIO      INTEGER,
NOME                 VARCHAR(255)                      not null,
EMAIL                VARCHAR(255)                      not null,
CIDADE               VARCHAR(255)                      not null,
TELEFONE             VARCHAR(20)                       not null,
DOCUMENTO            VARCHAR(255)                      not null,
constraint PK_GINASIO primary key (ID_GINASIO)
);

/*==============================================================*/
/* Table: PESSOA                                                */
/*==============================================================*/
create table PESSOA (
ID_PESSOA            INTEGER           AUTO_INCREMENT             not null,
CIDADE               VARCHAR(255),
NOME                 VARCHAR(255)                      not null,
EMAIL                VARCHAR(200)                      not null,
TELEFONE             VARCHAR(255),
LOGIN                VARCHAR(100)                      not null,
SENHA                VARCHAR(255)                      not null,
NIVEL                INTEGER                        not null,
constraint PK_PESSOA primary key (ID_PESSOA)
);

/*==============================================================*/
/* Table: QUADRA                                                */
/*==============================================================*/
create table QUADRA (
ID_QUADRA            INTEGER             AUTO_INCREMENT           not null,
ID_GINASIO           INTEGER,
DESCRICAO            VARCHAR(255)                      not null,
TIPO                 VARCHAR(255)                      not null,
VALOR                NUMERIC(10,2)                  not null,
constraint PK_QUADRA primary key (ID_QUADRA)
);

/*==============================================================*/
/* Table: RESERVA                                               */
/*==============================================================*/
create table RESERVA (
ID_RESERVA           INTEGER                AUTO_INCREMENT        not null,
ID_PESSOA            INTEGER,
ID_QUADRA            INTEGER,
DATA                 DATE                           not null,
STATUS_PAG           VARCHAR(100)                      not null,
STATUS_RESERVA       VARCHAR(100)                      not null,
INICIO               DATE,
FIM                  DATE,
DATA_RESERVADA       DATE,
constraint PK_RESERVA primary key (ID_RESERVA)
);

alter table GINASIO
   add constraint FK_GINASIO_REFERENCE_PESSOA foreign key (ID_PROPRIETARIO)
      references PESSOA (ID_PESSOA);

alter table QUADRA
   add constraint FK_QUADRA_REFERENCE_GINASIO foreign key (ID_GINASIO)
      references GINASIO (ID_GINASIO);

alter table RESERVA
   add constraint FK_RESERVA_REFERENCE_PESSOA foreign key (ID_PESSOA)
      references PESSOA (ID_PESSOA);

alter table RESERVA
   add constraint FK_RESERVA_REFERENCE_QUADRA foreign key (ID_QUADRA)
      references QUADRA (ID_QUADRA);
