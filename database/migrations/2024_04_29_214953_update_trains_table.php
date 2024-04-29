use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dateTime('departure_datetime'); // Dodaj kolumnę daty i czasu odjazdu
            $table->integer('available_seats')->default(0); // Dodaj kolumnę dostępnej liczby miejsc, domyślnie 0
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('departure_datetime'); // Usuń kolumnę daty i czasu odjazdu
            $table->dropColumn('available_seats'); // Usuń kolumnę dostępnej liczby miejsc
        });
    }
};
