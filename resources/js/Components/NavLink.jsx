import { cn } from '@/lib/utils';
import { Link } from '@inertiajs/react';

export default function NavLink({ active = false, url = '#', title = '', icon: Icon, ...props }) {
    return (
        <Link
            {...props}
            href={url}
            className={cn(
                active
                    ? 'bg-gradient-to-r from-orange-500 to-orange-400 font-semibold text-white hover:text-white'
                    : 'text-muted-foreground hover:text-orange-500',
                'flex items-center gap-3 rounded-lg p-3 transition-all duration-200',
            )}
        >
            <Icon className="h-4 w-4" />
            {title}
        </Link>
    );
}
