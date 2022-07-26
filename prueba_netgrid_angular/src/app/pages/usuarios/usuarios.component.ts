import { Component, OnInit } from '@angular/core';
import { MatTableDataSource } from '@angular/material/table';
import { UsuarioService } from '../services/usuario.service';
import { interfasdeusuario } from '../interface/usuario.interface';



@Component({
  selector: 'app-usuarios',
  templateUrl: './usuarios.component.html',
  styleUrls: ['./usuarios.component.css']
})
export class UsuariosComponent implements OnInit {
  usuarios!: interfasdeusuario[];
  constructor(public usuarioService: UsuarioService) { }

  ngOnInit(): void {
    this.usuarioService.getUsuarios().subscribe((data: interfasdeusuario[])=>{
      this.usuarios= data;
      console.log(this.usuarios);
    });
  }
    displayedColumns: string[] = ['id_usuario','usuario','nombre_usuario','apellido_usuario','tipo_identificacion','identificacion_usuario','fecha_nacimiento_usuario','password_usuario:string'];
    dataSource = new MatTableDataSource<interfasdeusuario>(this.usuarios);

}
