
class Fecha {
    #dia
    #mes
    #anyo
    #isValidDate(dia, mes, anyo) {
      if (anyo % 4 === 0) {
        const daysInMonth = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        return dia >= 1 && dia <= daysInMonth[mes - 1] && mes >= 1 && mes <= 12;
      } else {
        const daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        return dia >= 1 && dia <= daysInMonth[mes - 1] && mes >= 1 && mes <= 12;
      }
    }
   
    parse_date(fecha_str) {
      const fecha = fecha_str.split("-");
      const dia = parseInt(fecha[0]);
      const mes = parseInt(fecha[1]);
      const anyo = parseInt(fecha[2]);
   
      if (this.isValidDate(dia, mes, anyo)) {
        this.#dia = dia;
        this.#mes = mes;
        this.#anyo = anyo;
      }
    }
   
    toString() {
      const meses = [
        "enero",
        "febrero",
        "marzo",
        "abril",
        "mayo",
        "junio",
        "julio",
        "agosto",
        "septiembre",
        "octubre",
        "noviembre",
        "diciembre",
      ];
      return `${this.dia} de ${meses[this.mes - 1]} del ${this.año}`;
    }
   }
   