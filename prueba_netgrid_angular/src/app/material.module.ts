import { NgModule } from "@angular/core";
import { MatTableModule} from "@angular/material/table";
import { MatPaginatorModule } from "@angular/material/paginator";
import { BrowserAnimationsModule } from "@angular/platform-browser/animations";

@NgModule({
    imports:[MatTableModule,
        BrowserAnimationsModule,
        MatPaginatorModule],
    exports: [MatTableModule,
        MatPaginatorModule,
        BrowserAnimationsModule]
})

export class materialModule{}